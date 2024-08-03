

const urlPath = window.location.pathname.split("/");
const length = urlPath.length;
const webPage = urlPath[length - 1];

let getUrlParams = new URLSearchParams(window.location.search);

const getFileExtension = (filename) => {

    // get file extension
    const extension = filename.split('.').pop();
    return extension;
}

let app = Vue.createApp({
    data() {
        return {
            // General utilites
            generalFunctions: new GeneralFunction({ apiPath: "" , logoutUrl : "login.php" }),
            images: null,
            loading: null,
            currentPage: null,
            currentExportPage: null,
            totalData: null,
            totalPage: null,
            per_page: 10,
            exportPer_page: 100,
            totalExportPage: null,
            class_active: null,
            reset_token: null,
            search: null,
            sort: null,
            sortValue: "",
            discoValue: "",
            // baseUrl:'',
            baseUrl: 'http://localhost/ainotech/',
            first_name: null,
            last_name: null,
            gender: null,
            address: null,
            occupation_or_work: null,
            total_payment: null,
            no_of_people: null,
            imagefile: null,
            itemDetails: null,
            imageSent: null,
            pathname: null,
            success: null,
            daily: null,
            weekly: null,
            monthly: null,
            location: null,
            team: null,
            locations: null,
            job: null,
            message: null,
            availability: null,
            date: null,
            skills: null,
            level: null,
            days: null,
            job_id: null,
            id: null,

            // login details
            email: null,
            password: null,
            confirm_password: null,
            username: null,
            name: null,
            token: null,
            adminDetails: null,
            superAdmin: null,
            admin_initials: null,
            admin_level: null,
            phoneNumber: null,
            available: null,
            
            //jobs
            jobs: null,
            name : null,
            details : null,
            locations : null,

            // staff
            staff: null,
            fullname: null,

            //booking 
            bookings: null,
            user_id: null,
            work_hour: null,
            admin_id: null,
            jobs_id: null,
            admins: null,
            request: null,
            adminStat: null,


        }
    },
    methods: {
        //general utilities
        getToken() {
            const adminDetails = window.localStorage.getItem("adminDetails");
            this.adminDetails = (adminDetails) ? adminDetails : null;
        },
        logout() {
            window.localStorage.removeItem("adminDetails");
            window.location = this.baseUrl + "login.php";
        },
        async nextPage() {
            this.currentPage = parseInt(this.currentPage) + 1;
            this.totalData = null;
            this.totalPage = null;
        },
        async previousPage() {
            this.currentPage = parseInt(this.currentPage) - 1;
            this.totalData = null;
            this.totalPage = null;
        },
        async setNoPerPage(no) {
            this.per_page = no;
            this.class_active = true;
        },
        async getIndex(index) {

        },
        async getItemIndex(index) {

        },
        swalToast(icon, title) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: false,
            })
            Toast.fire({
                icon: icon,
                title: title
            })
        },
        // async uploadImage(event) {
        //     this.imageSent = event.target.files[0];
        // },

        async uploadImage(event) {
            const files = event.target.files;
            if (files.length > 0) {
                if (files.length === 1) {
                    this.imageSent = files[0];
                } else {
                    this.imagesSent = [...files]; 
                }
            }
        },

        async onLoading() {
            this.loading = true;
        },
        async onCompleted() {
            this.loading = false;
        },
        async onSuccess(successText, successData) {
            this.generalFunctions.swalToast('success', successText);
        },

        async onError(error) {
            this.generalFunctions.swalToast('error', error);
        },

        async callPostRequest(data, url, headers, onSuccess, canNavOn401 = 1) {
            let responseData = await this.generalFunctions.postRequest(data, url, headers, this.onLoading, this.onCompleted, (successStatus, success, successData) => {
                this.onSuccess(success, successData);
                if (typeof onSuccess === 'function') {
                    onSuccess(successStatus, successData);
                }
            }, this.onError, canNavOn401);
        },

        async callGetRequest( url, headers, onSuccess, showToast = 1){
            let responseData = await this.generalFunctions.getRequest(url, headers, this.onLoading, this.onCompleted, (successStatus, success, successData) =>{
                // if ( showToast == 1 ) this.onSuccess(success, successData);
                if ( typeof onSuccess === 'function' ) {
                    onSuccess(successStatus, successData);
                }
            }, this.onError);
        },


        // AUTH
        async Login() {
           
            if (!this.email || !this.password) {
                this.generalFunctions.swalToast("error", "Kindly Enter all Fields")
                return
            }
            const url = `api/v1/admin/login`;
            let data = {
                "email": this.email,
                "password": this.password,
            };
            let headers = {
                "Content-type": "application/json",
            };
            await this.callPostRequest(data, url, headers, (successStatus, successData) => {
                if (!successData) {
                    return;
                }
                let adminDetails = successData;
                window.localStorage.setItem("adminDetails", adminDetails);
                this.generalFunctions.swalToast("success", "Aino Tech login successfully");
                window.location = `${this.baseUrl}dashboard.php`;
            }, 2);
        },

        //User 
        async getAllUser(load = 1) {
            let page = (this.currentPage) ? this.currentPage : 1;
            let limit = (this.per_page) ? this.per_page : 10;
            const url = `api/v1/admin/users/get-all-users/:${page}/:${limit}`;
            let headers = {
                "Content-type": "application/json",
                "Authorization": `Bearer ${this.token}`
            };

            await this.callGetRequest(url, headers, (successStatus, successData) => {
                if (successStatus && successData.success) {
                    this.users = successData.users;
                } else {
                    // Handle error or no data case here
                    console.error("Failed to fetch users or no users found");
                }
            });
        },

    },
    async beforeMount() {
        this.pathname = window.location.href;
        if (!webPage.includes("login.php") && !webPage.includes("login")) {
            window.localStorage.setItem("ainoTechCurrentPage", webPage);
            this.loading = true;
            this.getToken();
            this.getAdminDetails();
            if (!this.token) {
                window.location = `${this.baseUrl}login.php`;
            }
        }

        
    },
    async mounted() {
        if (webPage === 'index.php' || webPage === 'index' || webPage === '') {
            this.per_page = 5;
            await this.getAllBooking();
            this.per_page = 5;
            await this.getAllStaff();
            this.per_page = 5;
            await this.getAllJobs();
            this.per_page = 5;
            await this.getAllRequest();
            await this.getAdminStat();
        }

        if (webPage === 'user.php' || webPage === 'user') {
            await this.getAllUser();
        }
        
    }
})

app.mount("#admin");

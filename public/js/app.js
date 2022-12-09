console.log("first");

const baseApi = "http://localhost:8000/";

//login
const handleLogin = async (e) => {
    //   e.preventDefault();
    const passport = document.querySelector(".passport").value;
    const password = document.querySelector(".password").value;

    const details = {
        passport: passport,
        password: password,
    };

    await axios.get(baseApi + "sanctum/csrf-cookie").then((response) => {
        console.log(response);
        if (response) {
            axios
                .post(baseApi + "api/login", details)
                .then((response) => {
                    if (response.data) {
                        console.log(response.data);
                        window.localStorage.clear();
                        localStorage.setItem("token", response.data.data.token);
                        location.replace(baseApi + "home");
                    }
                })
                .catch(function (error) {
                    console.log(error.response.data);
                });
        }
    });
};

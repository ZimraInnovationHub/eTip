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
                    console.log(response.data);
                    window.localStorage.clear();
                    localStorage.setItem("token", response.data.data.token);

                    location.replace(baseApi + "home");
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "Success",
                        showConfirmButton: false,
                        timer: 1500,
                    });
                })
                .catch(function (error) {
                    console.log(error.response.data);
                    Swal.fire({
                        icon: "error",
                        text: "Username and Password do not match!!!",
                    });
                });
        }
    });
};

// Registration
const handleRegistration = async (e) => {
    //   e.preventDefault();
    const first_name = document.querySelector(".first_name").value;
    const last_name = document.querySelector(".last_name").value;
    const email = document.querySelector(".email").value;
    const passport = document.getElementById("passport").value;
    const phone = document.querySelector(".phone").value;
    const password = document.getElementById("password").value;
    const password_confirmation = document.querySelector(
        ".password_confirmation"
    ).value;

    const details = {
        last_name: last_name,
        first_name: first_name,
        email: email,
        passport: passport,
        phone: phone,
        password: password,
        password_confirmation: password_confirmation,
    };

    await axios.get(baseApi + "sanctum/csrf-cookie").then((response) => {
        axios
            .post(baseApi + "api/register", details)
            .then((response) => {
                console.log(response.data);
                window.localStorage.clear();
                localStorage.setItem("token", response.data.data.token);
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Success",
                    showConfirmButton: false,
                    timer: 1500,
                });
                location.replace(baseApi + "home");
            })
            .catch(function (error) {
                console.log(error.response.data);
                Swal.fire({
                    icon: "error",
                    text: "Check your details...",
                });
            });
    });
};

const handleLogout = async () => {
    let token = localStorage.getItem("token");
    console.log(token);

    const config = {
        headers: { Authorization: `Bearer ${token}` },
    };
    console.log(config);
    await axios
        .post(baseApi + "api/logout", config)
        .then((response) => {
            console.log(response);
            location.replace(baseApi);
        })
        .catch((error) => {
            console.log(error.response.data);
        });
};

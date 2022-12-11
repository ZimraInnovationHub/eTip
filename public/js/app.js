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

var logout = document.getElementById("logout");
logout.onclick = handleLogout;

// creating a permit
// personal details

const addPersonalDetails = () => {
    emptyFields();
    const title = document.querySelector(".title").value;
    const last_name = document.querySelector(".last_name").value;
    const first_name = document.querySelector(".first_name").value;
    const email = document.querySelector(".email").value;
    const passport = document.querySelector(".passport").value;
    const phone = document.querySelector(".phone").value;
    const country = document.querySelector(".country").value;
    const address = document.querySelector(".address").value;
    const country_code = document.querySelector(".country_code").value;
    const nationality = document.querySelector(".nationality").value;
    const nationality_code = document.querySelector(".nationality_code").value;
    const intended_address = document.querySelector(".intended_address").value;
    const intended_date_of_travel = document.querySelector(
        ".intended_date_of_travel"
    ).value;
    const intended_port = document.querySelector(".intended_port").value;
    const intended_port_code = document.querySelector(
        ".intended_port_code"
    ).value;

    if (emptyFields() == "false") {
        Swal.fire({
            icon: "error",
            text: "Please fill all fields...",
        });
    } else {
        localStorage.setItem("title", title);
        localStorage.setItem("last_name", last_name);
        localStorage.setItem("first_name", first_name);
        localStorage.setItem("email", email);
        localStorage.setItem("passport", passport);
        localStorage.setItem("phone", phone);
        localStorage.setItem("country", country);
        localStorage.setItem("address", address);
        localStorage.setItem("country_code", country_code);
        localStorage.setItem("nationality", nationality);
        localStorage.setItem("nationality_code", nationality_code);
        localStorage.setItem("intended_address", intended_address);
        localStorage.setItem(
            "intended_date_of_travel",
            intended_date_of_travel
        );
        localStorage.setItem("intended_port", intended_port);
        localStorage.setItem("intended_port_code", intended_port_code);
        const button = document.querySelector("#addPersonal");
        button.dataset.bsTarget = "#exampleModalToggle2";
        button.dataset.bsToggle = "modal";
        button.click();
    }

    // const button = document.querySelector("#addPersonal");
    // button.dataset.target = "#exampleModalToggle2";
    // button.dataset.toggle = "modal";
    // console.log(button);
    // button.click();
};

// checking for empty fields
function emptyPersonalFields() {
    const title = document.querySelector(".title").value;
    const last_name = document.querySelector(".last_name").value;
    const first_name = document.querySelector(".first_name").value;
    const email = document.querySelector(".email").value;
    const passport = document.querySelector(".passport").value;
    const phone = document.querySelector(".phone").value;
    const country = document.querySelector(".country").value;
    const address = document.querySelector(".address").value;
    const country_code = document.querySelector(".country_code").value;
    const nationality = document.querySelector(".nationality").value;
    const nationality_code = document.querySelector(".nationality_code").value;
    const intended_address = document.querySelector(".intended_address").value;
    const intended_date_of_travel = document.querySelector(
        ".intended_date_of_travel"
    ).value;
    const intended_port = document.querySelector(".intended_port").value;
    const intended_port_code = document.querySelector(
        ".intended_port_code"
    ).value;

    if (
        title === "" ||
        last_name === "" ||
        first_name === "" ||
        email === "" ||
        passport === "" ||
        phone === "" ||
        country === "" ||
        address === "" ||
        country_code === "" ||
        nationality === "" ||
        nationality_code === "" ||
        intended_address === "" ||
        intended_date_of_travel === "" ||
        intended_port === "" ||
        intended_port_code === ""
    ) {
        return "false";
    } else {
        return "true";
    }
}
function emptyVehicleFields() {
    const title = document.querySelector(".title").value;
    const last_name = document.querySelector(".last_name").value;
    const first_name = document.querySelector(".first_name").value;
    const email = document.querySelector(".email").value;
    const passport = document.querySelector(".passport").value;
    const phone = document.querySelector(".phone").value;
    const country = document.querySelector(".country").value;
    const address = document.querySelector(".address").value;
    const country_code = document.querySelector(".country_code").value;
    const nationality = document.querySelector(".nationality").value;
    const nationality_code = document.querySelector(".nationality_code").value;
    const intended_address = document.querySelector(".intended_address").value;
    const intended_date_of_travel = document.querySelector(
        ".intended_date_of_travel"
    ).value;
    const intended_port = document.querySelector(".intended_port").value;
    const intended_port_code = document.querySelector(
        ".intended_port_code"
    ).value;

    if (
        title === "" ||
        last_name === "" ||
        first_name === "" ||
        email === "" ||
        passport === "" ||
        phone === "" ||
        country === "" ||
        address === "" ||
        country_code === "" ||
        nationality === "" ||
        nationality_code === "" ||
        intended_address === "" ||
        intended_date_of_travel === "" ||
        intended_port === "" ||
        intended_port_code === ""
    ) {
        return "false";
    } else {
        return "true";
    }
}

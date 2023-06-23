// const baseApi = "http://localhost:8000/";
// const cors = require(["cors"]);
// cors({
//     origin: "http://localhost:8000",
// });

// function rCaptcha(token) {
//     const myHeaders = new Headers();
//     const secret_key = "6Lfl3mcjAAAAAPJPUcM5XC8F6ILg2H6-zdNwZlAZ";
//     const url =
//         "https://www.google.com/recaptcha/api/siteverify?secret=" +
//         secret_key +
//         "&response=" +
//         token;
//     const xhttp = new XMLHttpRequest();
//     xhttp.open("post", url, true);
//     xhttp.setRequestHeader("Access-Control-Allow-Origin", "*");
//     xhttp.send();

//     // fetch(url, {
//     //     method: "POST",
//     //     headers: myHeaders,
//     //     mode: "cors",
//     // }).then((response) => {
//     //     if (response["success"] == false) {
//     //         console.log(response);
//     //         resolve();
//     //     }
//     // });
// }
// function loginTest() {
//     const passport = document.querySelector(".passport").value;
//     const password = document.querySelector(".password").value;

//     const details = {
//         passport: passport,
//         password: password,
//     };
//     // let config = {
//     //     method: "POST",
//     //     url: baseApi + "api/login",
//     //     headers: {
//     //         "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
//     //     },
//     //     data: details,
//     // };

//     axios.defaults.headers.common = {
//         "X-Requested-With": "XMLHttpRequest",
//         "X-CSRF-TOKEN": document
//             .querySelector('meta[name="csrf-token"]')
//             .getAttribute("content"),
//     };

//     axios
//         .post(baseApi + "api/login", details)
//         .then((response) => {
//             console.log(response.data);
//             window.localStorage.clear();
//             localStorage.setItem("token", response.data.data.token);

//             location.replace(baseApi + "home");
//             Swal.fire({
//                 position: "top-end",
//                 icon: "success",
//                 title: "Success",
//                 showConfirmButton: false,
//                 timer: 1500,
//             });
//         })
//         .catch(function (error) {
//             console.log(error.response.data);
//             Swal.fire({
//                 icon: "error",
//                 text: "Username and Password do not match!!!",
//             });
//         });
// }

// //login
// const handleLogin = async (e) => {
//     //   e.preventDefault();
//     const passport = document.querySelector(".passport").value;
//     const password = document.querySelector(".password").value;

//     const details = {
//         passport: passport,
//         password: password,
//     };

//     await axios.get(baseApi + "sanctum/csrf-cookie").then((response) => {
//         console.log(response);
//         if (response) {
//             axios
//                 .post(baseApi + "api/login", details)
//                 .then((response) => {
//                     console.log(response.data);
//                     window.localStorage.clear();
//                     localStorage.setItem("token", response.data.data.token);

//                     location.replace(baseApi + "home");
//                     Swal.fire({
//                         position: "top-end",
//                         icon: "success",
//                         title: "Success",
//                         showConfirmButton: false,
//                         timer: 1500,
//                     });
//                 })
//                 .catch(function (error) {
//                     console.log(error.response.data);
//                     Swal.fire({
//                         icon: "error",
//                         text: "Username and Password do not match!!!",
//                     });
//                 });
//         }
//     });
// };

// // Registration
// const handleRegistration = async (e) => {
//     //   e.preventDefault();
//     const first_name = document.querySelector(".first_name").value;
//     const last_name = document.querySelector(".last_name").value;
//     const email = document.querySelector(".email").value;
//     const passport = document.getElementById("passport").value;
//     const phone = document.querySelector(".phone").value;
//     const password = document.getElementById("password").value;
//     const password_confirmation = document.querySelector(
//         ".password_confirmation"
//     ).value;

//     const details = {
//         last_name: last_name,
//         first_name: first_name,
//         email: email,
//         passport: passport,
//         phone: phone,
//         password: password,
//         password_confirmation: password_confirmation,
//     };

//     await axios.get(baseApi + "sanctum/csrf-cookie").then((response) => {
//         axios
//             .post(baseApi + "api/register", details)
//             .then((response) => {
//                 console.log(response.data);
//                 window.localStorage.clear();
//                 localStorage.setItem("token", response.data.data.token);

//                 location.replace(baseApi + "home");
//                 Swal.fire({
//                     position: "top-end",
//                     icon: "success",
//                     title: "Success",
//                     showConfirmButton: false,
//                     timer: 1500,
//                 });
//             })
//             .catch(function (error) {
//                 console.log(error.response.data);
//                 Swal.fire({
//                     icon: "error",
//                     text: "Check your details...",
//                 });
//             });
//     });
// };

// const handleLogout = async () => {
//     let token = localStorage.getItem("token");
//     console.log(token);

//     const config = {
//         headers: { Authorization: `Bearer ${token}` },
//     };
//     console.log(config);
//     await axios
//         .post(baseApi + "api/logout", config)
//         .then((response) => {
//             console.log(response);
//             location.replace(baseApi);
//         })
//         .catch((error) => {
//             console.log(error.response.data);
//         });
// };

// var logout = document.getElementById("logout");
// logout.onclick = handleLogout;

// // creating a permit
// // personal details
let tipInfo = { driver: {}, vihicle: {}, trailer: {}, owner: {}, other: {} };

const addPersonalDetails = () => {
    // console.log("object");
    emptyPersonalFields();
    const driver_title = document.querySelector(".title").value;
    const driver_last_name = document.querySelector(".last_name").value;
    const driver_first_name = document.querySelector(".first_name").value;
    const driver_email = document.querySelector(".email").value;
    const driver_passport = document.querySelector(".passport").value;
    const driver_phone = document.querySelector(".phone").value;
    const driver_country = document.querySelector(".country").value;
    const driver_address = document.querySelector(".address").value;
    const driver_country_code = document.querySelector(".country_code").value;
    const driver_nationality = document.querySelector(".nationality").value;
    const driver_nationality_code =
        document.querySelector(".nationality_code").value;
    const driver_intended_address =
        document.querySelector(".intended_address").value;
    const driver_intended_date_of_travel = document.querySelector(
        ".intended_date_of_travel"
    ).value;
    const driver_intended_port = document.querySelector(".intended_port").value;
    const driver_intended_port_code = document.querySelector(
        ".intended_port_code"
    ).value;

    if (emptyPersonalFields() == "false") {
        Swal.fire({
            icon: "error",
            text: "Please fill all fields...",
        });
    } else {
        tipInfo = {
            driver_title,
            driver_last_name,
            driver_first_name,
            driver_email,
            driver_email,
            driver_passport,
            driver_phone,
            driver_country,
            driver_address,
            driver_country_code,
            driver_nationality,
            driver_nationality_code,
            driver_intended_address,
            driver_intended_date_of_travel,
            driver_intended_port,
            driver_intended_port_code,
        };
        console.log(tipInfo);
        const button = document.querySelector("#addPersonal");
        button.dataset.bsTarget = "#exampleModalToggle2";
        button.dataset.bsToggle = "modal";
        button.click();

        // button.addEventListener("click", function () {
        //     console.log(localStorage.getItem("title"));
        // });
    }
};

const addVehicleDetails = () => {
    emptyVehicleFields();
    const vehicle_make = document.querySelector(".make").value;
    const vehicle_body_type = document.querySelector(".body_type").value;
    const vehicle_vClass = document.querySelector(".class").value;
    const vehicle_registration = document.querySelector(".registration").value;
    const vehicle_chassis = document.querySelector(".chassis").value;
    const vehicle_capacity = document.querySelector(".capacity").value;
    const vehicle_country_of_manufacture = document.querySelector(
        ".country_of_manufacture"
    ).value;
    const vehicle_country_code = document.querySelector(".country_code").value;
    const vehicle_year = document.querySelector(".year").value;
    const vehicle_value = document.querySelector(".value").value;
    const vehicle_insurance = document.querySelector(".insurance").value;
    const vehicle_currency = document.querySelector(".currency").value;

    if (emptyVehicleFields() == "false") {
        Swal.fire({
            icon: "error",
            text: "Please fill all fields...",
        });
    } else {
        tipInfo = {
            ...tipInfo,
            vehicle_make,
            vehicle_body_type,
            vehicle_vClass,
            vehicle_registration,
            vehicle_chassis,
            vehicle_capacity,
            vehicle_country_of_manufacture,
            vehicle_country_code,
            vehicle_year,
            vehicle_value,
            vehicle_value,
            vehicle_insurance,
            vehicle_currency,
        };
        console.log(tipInfo);
        const button = document.querySelector("#addVehicle");
        button.dataset.bsTarget = "#exampleModalToggle3";
        button.dataset.bsToggle = "modal";
        button.click();
    }
};

const Tchecked = () => {
    const trailerForm = document.querySelector(".trailerForm");
    const yes_iht = document.querySelector(".yes_iht");
    if (yes_iht.checked == true) {
        console.log("checked");
        trailerForm.removeAttribute("hidden");
    } else {
        console.log("not checked");
    }
};

const addTrailerDetails = () => {
    const yes_iht = document.querySelector(".yes_iht");

    if (yes_iht.checked == true && emptyTrailerFields() == true) {
        Swal.fire({
            icon: "error",
            text: "Please fill all fields...",
        });
    } else {
        const trailer_make = document.querySelector(".tmake").value;
        const trailer_body_type = document.querySelector(".tbody").value;
        const trailer_vClass = document.querySelector(".class").value;
        const trailer_registration =
            document.querySelector(".tregistration").value;
        const trailer_chassis = document.querySelector(".tchassis").value;
        // const capacity = document.querySelector(".capacity").value;
        const trailer_country_of_manufacture = document.querySelector(
            ".tcountry_of_manufacture"
        ).value;
        const trailer_country_code =
            document.querySelector(".tcountry_code").value;
        const trailer_year = document.querySelector(".tyear").value;
        const trailer_value = document.querySelector(".tvalue").value;
        const trailer_insurance = document.querySelector(".tinsurance").value;
        const trailer_currency = document.querySelector(".tcurrency").value;

        tipInfo = {
            ...tipInfo,
            trailer_make,
            trailer_vClass,
            trailer_body_type,
            trailer_registration,
            trailer_chassis,
            trailer_country_of_manufacture,
            trailer_country_code,
            trailer_year,
            trailer_value,
            trailer_insurance,
            trailer_currency,
        };
        console.log(tipInfo);

        const button = document.querySelector("#addOwner");
        button.dataset.bsTarget = "#exampleModalToggle4";
        button.dataset.bsToggle = "modal";
        button.click();
    }
};

function amOwner() {
    const iao = document.querySelector(".iao");
    const amowner = document.querySelector("#amowner");
    if (iao.checked) {
        amowner.removeAttribute("hidden");
    }
}

const addOwnerDetails = () => {
    const iao = document.querySelector(".iao");

    if (iao.checked == true && emptyOwner() == true) {
        Swal.fire({
            icon: "error",
            text: "Please fill all fields...",
        });
    } else {
        const owner_lastname = document.querySelector(".owner_lastname").value;
        const owner_firstname =
            document.querySelector(".owner_firstname").value;
        const owner_address = document.querySelector(".owner_address").value;

        tipInfo = {
            ...tipInfo,
            owner_lastname,
            owner_firstname,
            owner_address,
        };

        console.log(tipInfo);

        const button = document.querySelector("#addVehicle");
        button.dataset.bsTarget = "#exampleModalToggle5";
        button.dataset.bsToggle = "modal";
        button.click();
    }
};
const addOtherDetails = () => {
    const iAgree = document.querySelector(".iAggre");

    if (emptyOther() == true) {
        Swal.fire({
            icon: "error",
            text: "Please fill all fields...",
        });
    } else if (iAgree.checked == false) {
        Swal.fire({
            icon: "error",
            text: "Please Read Driver's Declaration Below and agree...",
        });
    } else {
        const other_description =
            document.querySelector(".other_description").value;
        const other_serialNumber = document.querySelector(
            ".other_serialNumber"
        ).value;
        const other_currency = document.querySelector(".other_currency").value;
        const other_value = document.querySelector(".other_value").value;

        tipInfo = {
            ...tipInfo,
            other_description,
            other_serialNumber,
            other_currency,
            other_value,
        };

        console.log(tipInfo);

        const button = document.querySelector("#addVehicle");
        button.dataset.bsTarget = "#exampleModalToggle5";
        button.dataset.bsToggle = "modal";
        button.click();
    }
};
// // checking for empty fields
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
    const make = document.querySelector(".make").value;
    const body_type = document.querySelector(".body_type").value;
    const vClass = document.querySelector(".class").value;
    const registration = document.querySelector(".registration").value;
    const chassis = document.querySelector(".chassis").value;
    const capacity = document.querySelector(".capacity").value;
    const country_of_manufacture = document.querySelector(
        ".country_of_manufacture"
    ).value;
    const country_code = document.querySelector(".country_code").value;
    const year = document.querySelector(".year").value;
    const value = document.querySelector(".value").value;
    const insurance = document.querySelector(".insurance").value;
    const currency = document.querySelector(".currency").value;

    if (
        make === "" ||
        body_type === "" ||
        vClass === "" ||
        registration === "" ||
        chassis === "" ||
        capacity === "" ||
        country_of_manufacture === "" ||
        country_code === "" ||
        year === "" ||
        value === "" ||
        insurance === "" ||
        currency === ""
    ) {
        return "false";
    } else {
        return "true";
    }
}
function emptyTrailerFields() {
    const make = document.querySelector(".tmake").value;
    const body_type = document.querySelector(".tbody").value;
    const vClass = document.querySelector(".class").value;
    const registration = document.querySelector(".tregistration").value;
    const chassis = document.querySelector(".tchassis").value;
    // const capacity = document.querySelector(".capacity").value;
    const country_of_manufacture = document.querySelector(
        ".tcountry_of_manufacture"
    ).value;
    const country_code = document.querySelector(".tcountry_code").value;
    const year = document.querySelector(".tyear").value;
    const value = document.querySelector(".tvalue").value;
    const insurance = document.querySelector(".tinsurance").value;
    const currency = document.querySelector(".tcurrency").value;
    // const yes_iht = document.querySelector(".yes_iht");

    if (
        make === "" ||
        body_type === "" ||
        vClass === "" ||
        registration === "" ||
        chassis === "" ||
        country_of_manufacture === "" ||
        country_code === "" ||
        year === "" ||
        value === "" ||
        insurance === "" ||
        currency === ""
    ) {
        return true;
    } else {
        return false;
    }
}
function emptyOwner() {
    const owner_lastname = document.querySelector(".owner_lastname").value;
    const owner_firstname = document.querySelector(".owner_firstname").value;
    const owner_address = document.querySelector(".owner_address").value;

    if (
        owner_lastname === "" ||
        owner_firstname === "" ||
        owner_address === ""
    ) {
        return true;
    } else {
        return false;
    }
}
function emptyOther() {
    const other_description =
        document.querySelector(".other_description").value;
    const other_serialNumber = document.querySelector(
        ".other_serialNumber"
    ).value;
    const other_currency = document.querySelector(".other_currency").value;
    const other_value = document.querySelector(".other_value").value;

    if (
        other_description === "" ||
        other_serialNumber === "" ||
        other_currency === "" ||
        other_value === ""
    ) {
        return true;
    } else {
        return false;
    }
}

// // change password

// // window.onload = () => {
// //     f = document.getElementById("formsArrangements");
// //     f.style.display = "none";
// // };

// passwordBtn = document.querySelector("#flexRadioDefault1");

// // passwordBtn.onclick = function () {};
// function deleteChange(el) {
//     elD = document.getElementById(el);
//     elD2 = document.getElementById("deactivatedAccount");
//     elD.style.display = "none";
//     elD2.style.display = "block";
// }

// function deactivateAccount(el) {
//     elD = document.getElementById(el);
//     elD3 = document.getElementById("changPassword");
//     elD.style.display = "none";
//     elD3.style.display = "block";
// }
// function deleteChange(el) {
//     elD = document.getElementById(el);
//     elD2 = document.getElementById("deactivatedAccount");
//     elD.style.display = "none";
//     elD2.style.display = "block";
// }

// function deactivateAccount(el) {
//     elD = document.getElementById(el);
//     elD3 = document.getElementById("changPassword");
//     elD.style.display = "none";
//     elD3.style.display = "block";
// }

// DOCUMENT SCRIPTS
console.log("Hello");
// setting multiple attributes at once
function setAttributes(ele, attr) {
    for (var key in attr) {
        ele.setAttribute(key, attr[key]);
    }
}
// const tr = document.getElementById("addRows");
// tr.style.display = "flex";
// tr.style.flexDirection = "row";

function appendElements(elements) {
    for (var i in elements) {
        document.getElementById("addRows").appendChild(elements[i]);
    }
}

// const add=document.getElementById('modalShow');
const modalAdd = document.getElementById("modalAdd");
const container = document.querySelector(".items-content");

container.addEventListener("click", removeItem);

function addRows() {
    // count++;
    var div = document.createElement("div");
    div.className = "row mb-2";

    div.innerHTML += `
    <div class="col">
      <div class="form-floating">
        <input type="text" class="form-control formAdd" id="desc" name="desc"/>
        <label for="floatingInput">Description</label>
      </div>
    </div>
    <div class="col">
      <div class="form-floating">
        <input type="text" class="form-control formAdd" id="serial" name="serial_number" value="123121"/>
        <label for="floatingInput">Serial Number</label>
      </div>
    </div>
    <div class="col">
      <div class="form-floating mb-3">
        <select class="form-select" id="currency" aria-label="Floating label select example" name="goods_value">
          <option selected>USDs</option>
          <option value="1">ZWL Bond Notes</option>
          <option value="2">ZWL RTGs</option>
          <option value="2">Gold Coin</option>
        </select>
        <label for="floatingSelect">Currency</label>
      </div>
    </div>

    <div class="col">
      <div class="form-floating mb-3">
        <input type="text" class="form-control formAdd" id="value" name="goods_currency" value="200"/>
        <label for="floatingInput">Value</label>
      </div>
    </div>

    <div class="col">
      <button type="button" class="btn btnColor addOtherTIP delete">
        Delete
      </button>
    </div>
  `;

    container.append(div);
}

const addItem = document.querySelector(".addOtherTIP");

addItem.addEventListener("click", addRows);

function removeItem(e) {
    if (e.target.classList.contains("delete")) {
        var div = e.target.parentElement.parentElement;
        container.removeChild(div);
    }
}

// function addMoreItems() {
//   console.log("addMore");
//   des = document.getElementById("desc").value;
//   serial = document.getElementById("serial").value;
//   currency = document.getElementById("currency").value;
//   val = document.getElementById("value").value;

//   console.log(des + serial + currency + val);

//   document.getElementById("addMoreNo").value = "1";
//   document.getElementById("addMoreDesc").value = des;
//   document.getElementById("addMoreSer").value = serial;
//   document.getElementById("addMoreQuant").value = currency;
//   document.getElementById("addMoreCurrency").value = val;
// }

// Add More Goods Ends

// DOCUMENT SCRIPTS ENDS

// API COMMS
// const api = "http://localhost:8000/api/";
const api = "http://localhost:8000/api/";

//login
const handleLogin = async (e) => {
    //   e.preventDefault();
    const passport = document.querySelector(".passport").value;
    const password = document.querySelector(".password").value;

    const details = {
        passport: passport,
        password: password,
    };

    await axios
        .post(api + "login", details)
        .then((response) => {
            console.log(response);
            window.open("application.html");
        })
        .catch(function (error) {
            console.log(error.response.data);
        });
};

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

    await axios
        .post(api + "register", details)
        .then((response) => {
            if (response.data) {
                console.log(response);
                window.open("application.html");
            }
        })
        .catch(function (error) {
            console.log(error.response.data);
        });
};

const addPersonalDetails = () => {
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
    localStorage.setItem("intended_date_of_travel", intended_date_of_travel);
    localStorage.setItem("intended_port", intended_port);
    localStorage.setItem("intended_port_code", intended_port_code);
};

const addVehickeDetails = () => {
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
};

//     const div = document.createElement("div");

//    const desc=document.createElement("input")
//     setAttributes(desc,{"name":"desc","class":"form-control addMoreItems", "id":"floatingInput","value":"desc","type":"text"})

//    const serial=document.createElement("input")
//     setAttributes(serial,{"name":"serial","class":"form-control addMoreItems", "id":"floatingInput","value":"serial","type":"text"})
//    const currency=document.createElement("input")
//     setAttributes(currency,{"name":"currency","class":"form-control addMoreItems", "id":"floatingInput","value":"currency","type":"text"})
//    const val=document.createElement("input")
//     setAttributes(val,{"name":"val","class":"form-control addMoreItems", "id":"floatingInput","value":"value","type":"text"})
//    const btn=document.createElement("button")
//         btn.innerHTML="Delete"
//     setAttributes(btn,{"name":"btn","class":"btn btnColor addMoreItems", "id":"btn","value":"Delete","type":"button"})

//     createdElements=[desc,serial,currency,val,btn]
//     const appended = appendElements(createdElements);

// div.appendChild(appended)

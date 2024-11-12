$(document).ready(function () {
  $("#login-btn").click(function () {
    $("#register").hide();
    $("#login").show();
  });

  document
    .getElementById("register")?.addEventListener("submit", function (event) {
      const form = this;
      const password = document.getElementById("set_password").value;
      const confirm = document.getElementById("confirm_password").value;
      if (password !== confirm) {
        document.getElementById("confirm_password").classList.add("is-invalid");
        event.preventDefault(); // Prevent form submission
        event.stopPropagation();
      } else {
        document
          .getElementById("confirm_password")
          .classList.remove("is-invalid");
        form.classList.add("was-validated");

        event.preventDefault();

        // Collect form data
        const formData = new FormData(this);

        // Send data using Axios
        axios
          .post("register.php", formData)
          .then((response) => {
            $("#toast").show();
            setTimeout(() => {
              $("#toast").hide();
            }, 3000);
            $(".btn-close").trigger("click");
            console.log("Form submitted successfully", response.data);
          })
          .catch((error) => {
            console.error("Form submission error", error);
          });

      }
    });

    document
    .getElementById("login")?.addEventListener("submit", function (event) {
      const form = this;

        event.preventDefault();

        // Collect form data
        const formData = new FormData(this);

        console.log(formData);

        // Send data using Axios
        axios
          .post("getUserLogin.php", formData)
          .then((response) => {
            console.log(response);
            response = response['data']
            if(response.statusCode === 200){
              localStorage.setItem('user', JSON.stringify(response))
            }
            $('#toast_id').text(response.status);
            $("#login_toast").show();
            setTimeout(() => {
              $("#login_toast").hide();
            }, 3000);
            $(".btn-close").trigger("click");
          })
          .catch((error) => {
            console.error("Form submission error", error);
          });
          
      });

  document.getElementById("event_id")?.addEventListener("submit", function (event) {
      const form1 = this;
      const formData1 = new FormData(this);
      axios
        .post("event.php", formData1)
        .then((response) => {
          $("#event_toast").show();
          setTimeout(() => {
            $("#event_toast").hide();
          }, 3000);
          $(".btn-close").trigger("click");
          console.log("Form submitted successfully", response.data);
        })
        .catch((error) => {
          console.error("Form submission error", error);
        });
    });

    document.getElementById("temple")?.addEventListener("submit", function (event) {
        const form2 = this;
        const formData2 = new FormData(this);
        axios
          .post("temple.php", formData2)
          .then((response) => {
            $("#temple_toast").show();
            setTimeout(() => {
              $("#temple_toast").hide();
            }, 3000);
            $(".btn-close").trigger("click");
            console.log("Form submitted successfully", response.data);
          })
          .catch((error) => {
            console.error("Form submission error", error);
          });
      });



      document.getElementById("calendar")?.addEventListener("submit", function (event) {
        const form4 = this;
        const formData4 = new FormData(this);
        axios
          .post("calendar.php", formData4)
          .then((response) => {
            $("#calendar_toast").show();
            setTimeout(() => {
              $("#calendar_toast").hide();
            }, 3000);
            $(".btn-close").trigger("click");
            console.log("Form submitted successfully", response.data);
          })
          .catch((error) => {
            console.error("Form submission error", error);
          });
      });



      document.getElementById("udonation")?.addEventListener("submit", function (event) {
        const form4 = this;
        const formData5 = new FormData(this);
        axios
          .post("donation.php", formData5)
          .then((response) => {
            $("#donation_toast").show();
            setTimeout(() => {
              $("#donation_toast").hide();
            }, 3000);
            $(".btn-close").trigger("click");
            console.log("Form submitted successfully", response.data);
          })
          .catch((error) => {
            console.error("Form submission error", error);
          });
      });



      document.getElementById("udarshan")?.addEventListener("submit", function (event) {
        const form6 = this;
        const formData7 = new FormData(this);
        axios
          .post("darshan.php", formData7)
          .then((response) => {
            $("#darshan_toast").show();
            setTimeout(() => {
              $("#darshan_toast").hide();
            }, 3000);
            $(".btn-close").trigger("click");
            console.log("Form submitted successfully", response.data);
          })
          .catch((error) => {
            console.error("Form submission error", error);
          });
      });
    
});

function getTempleData(){
    axios.get("getTemples.php")
        .then((response) => {
            //console.log("Form submitted successfully", response.data);
            for (let i = 0; i < response.data.length; i++) {
                $('#dtname').append('<option value="'+response.data[i].tid+'">'+response.data[i].tname+'</option>');
            }
            $('#userdonation').modal('show');
        })
        .catch((error) => {
            console.error("Form submission error", error);
        });
}





function getTempleData_darshan(){
    axios.get("getTemples.php")
        .then((response) => {
            //console.log("Form submitted successfully", response.data);
            for (let i = 0; i < response.data.length; i++) {
                $('#darshan_temple').append('<option value="'+response.data[i].tid+'">'+response.data[i].tname+'</option>');
            }
            $('#darshan').modal('show');
        })
        .catch((error) => {
            console.error("Form submission error", error);
        });
}

function scrollToTargetAdjusted(id) {
    const element = document.getElementById(id);
    const offset = 70; // Set your desired offset here (90px)
    const bodyRect = document.body.getBoundingClientRect().top;
    const elementRect = element.getBoundingClientRect().top;
    const elementPosition = elementRect - bodyRect;
    const offsetPosition = elementPosition - offset;

    window.scrollTo({
        top: offsetPosition,
        behavior: "smooth"
    });
}


function getEvents(){
    axios.get("getEvents.php")
        .then((response) => {
            //console.log("Form submitted successfully", response.data);
            for (let i = 0; i < response.data.length; i++) {
            console.log("Form submitted successfully", response.data[i]);
        }
        })
        .catch((error) => {
            console.error("Form submission error", error);
        });
}

function openCalender(){
    
        const calendarEl = document.getElementById('calendar')
        const calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth'
        })
        calendar.render()
        $('#calendarmodal').modal('show');
        $('#calendarmodal .modal-body').css({'height':'500px', width: '500px', positive: 'relative'});
}

// $('#donation-btn').on('click', function (){
//     console.log("0000000000000000")
// })
function showSignUp() {
  $("#register").show();
  $("#login").hide();
}

function showLogin() {
  $("#register").hide();
  $("#login").show();
}

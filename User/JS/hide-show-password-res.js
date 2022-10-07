const passField2 = document.querySelector("#passwword2");
const showBtn2 = document.querySelector("#show_pass2");
   showBtn2.onclick = ()=>{
     if(passField2.type == "password"){
       passField2.type = "text";
       showBtn.classList.add("active");
     }else{
       passField2.type = "password";
       showBtn2.classList.remove("active");
     }
   };




   const passField1 = document.querySelector("#passwword1");
   const showBtn1 = document.querySelector("#show_pass1");
      showBtn1.onclick = ()=>{
        if(passField1.type == "password"){
          passField1.type = "text";
          showBtn1.classList.add("active");
        }else{
          passField1.type = "password";
          showBtn1.classList.remove("active");
        }
      };
   
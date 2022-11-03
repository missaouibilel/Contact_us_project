const form = document.querySelector("form"),
statusTxt=form.querySelector(".button-area span");

form.onsubmit=(e)=>{
    e.preventDefault();
    statusTxt.style.color="#6f42c1";
    statusTxt.style.display="block";
    //console.log("message sent");
    let xhr=new XMLHttpRequest(); // creating new xml object
    xhr.open("POST", "message.php",true);
    xhr.onload = ()=>{ //once ajax loaded
        if(xhr.readyState == 4 && xhr.status == 200){
            let response = xhr.response; //storing ajax responce in a responce variable 
            if(response.indexOf("email and message feild is required")!=-1|| response.indexOf("Sorry, failed to send your message")!=-1||response.indexOf("Enter a valid email adress")!=-1){
                statusTxt.style.color="red";
            }
            else{
                form.reset();
                setTimeout(()=>{
                    statusTxt.style.display="none";
                },2000);
            }
           // console.log(response);
            statusTxt.innerText = response;
        }

    }
    let formData = new FormData(form); // ceating new formData obj.this obj is used to sebd form data
    xhr.send(formData); //sending form data

    
}
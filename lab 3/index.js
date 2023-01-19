let button = document.querySelector('.main-catalog-btn');
        let item = document.querySelectorAll(".item");
        let yakor = document.querySelector(".link-first")

        yakor.href = "#catalog";

        button.onclick = function(){
           for(let i = 0; i<item.length; i++){
            if(i % 2 != 0){
                item[i].classList.toggle("bg-item");
            }
        }  
        }
       
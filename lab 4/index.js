        let item = document.querySelectorAll(".iteam");
        let button_color = document.querySelector('.color');
        let button_sort = document.querySelector('.sort');
        let yakor = document.querySelector(".link-first");

        yakor.href = "#catalog";
        
        button_color.onclick = function(){
           for(let i = 0; i<item.length; i++){
            if(i % 2 != 0){
                console.log("test");
                item[i].classList.toggle("bg-iteam");
            }
        } 
        };

        button_sort.addEventListener("click", () => {
         
        const elements = document.querySelectorAll('.iteam');
        const sorted = [...elements].sort((a, b) => {
            const priceElA = a.querySelector(".cost");
            const priceElB = b.querySelector(".cost");
            const getPrice = (el) => parseInt(el.innerHTML.replace(/ /g, ""));
            return getPrice(priceElA) - getPrice(priceElB);
        });
        const resultEl = document.querySelector(".main-catalog");
        resultEl.innerHTML = null;
        sorted.forEach(el => resultEl.appendChild(el));
        }); 

let tenisJson = [
    {
        id:0,
        nome: 'Tênis Jordan nike',
        img: 'assets/image/tenis1.jpg',
        price:[132.00],
        sizes: [
            '41'
          
        ],
        desc:'Sapato totalmente eslitoso',
        quantidade: 0
    },
    {
        id:1,
        nome: 'Tênis Nike Resvolution 5',
        img: 'assets/image/tenis2.jpg',
        price:[152.00],
        sizes: [   
            '42'
        ],
        desc:'Sapato totalmente eslitoso',
        quantidade: 0
    },   
    {
        id:2,
        nome: 'Nike RN FLYKN',
        img: 'assets/image/tenis3.png',
        price:[126.00],
        sizes: [    
            '43'   
        ],
        desc:'Sapato totalmente eslitoso',
        quantidade: 0
    }
]

inicializarLoja = () => {
    var containerProdutos = document.getElementById('product');
    tenisJson.map((val)=> {
        containerProdutos.innerHTML+=`
        
    <div class="card" style="width: 18rem; position:relative; margin:40px;"  >
            <img id="img_shoes" src="`+val.img+`" class="card-img-top">
        <div class="card-body">
             <h5 class="card-title">`+val.nome+`</h5>
             <p class="card-text">`+val.desc+`</p>
             <p>Preço: R$ `+val.price+`,90</p>
             <p>Tamanho: `+val.sizes+`</p>
             <a class="adcbtn btn btn-primary" key="`+val.id+`" href="#" id="adicionarbtn">Adicionar ao carrinho</a>
        </div>
    </div>
        
        
       `;


    }) 
}



inicializarLoja();

atualizarCarrinho = () => {
    var containerCarrinho = document.getElementById('carrinho_shop');
    containerCarrinho.innerHTML = "";
    tenisJson.map((val)=> {
        if(val.quantidade > 0){
            containerCarrinho.innerHTML+= `

            <p>`+val.nome+` ||| quantidade:  `+val.quantidade+` </p>
            <hr>

            `
        }
    })
}

var links = document.getElementsByClassName('adcbtn');
for(var i = 0; i < links.length; i++) {
    links[i].addEventListener("click", function(){
        let key = this.getAttribute('key');
        tenisJson[key].quantidade++;
        atualizarCarrinho();
        return false;
    })
}
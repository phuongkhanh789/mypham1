var imgFeature = document.querySelector('.img-feature')
var listImg = document.querySelectorAll('.list-image img')
var prevBtn = document.querySelector('.prev')
var nextBtn = document.querySelector('.next')
var currenIndex = 0;
function updateImageByIndex(index){
    document.querySelectorAll('.list-image div').forEach(item=>{
        item.classList.remove('active')
    })
    currenIndex = index
    imgFeature.src = listImg[index].getAttribute('src')
    listImg[index].parentElement.classList.add('active')
}
listImg.forEach((imgElement, index)=>{
    imgElement.addEventListener('click', e=>{
        imgFeature.style.opacity = '0'
        setTimeout(()=>{
            updateImageByIndex(index)
            imgFeature.style.opacity = '1'
        },400)
        var x = setInterval(function(){
            console.log('list-image');
            },1000);
            // Sau 1 giây nó in ra màn hình console chuỗi ohmyGOD
            clearInterval(x);
            // Hủy bỏ phương thức setInterval
        
    })
})
setInterval(function(){
    if(currenIndex == listImg.length - 1){
        currenIndex = 0
    }else{
        currenIndex++
    }
    imgFeature.style.animation = ''
    setTimeout(()=>{
        updateImageByIndex(currenIndex)
        imgFeature.style.animation = 'slideRight 1s ease-in-out forwards'
    },200)
},2000
)
prevBtn.addEventListener('click', e=>{
    if(currenIndex == 0){
        currenIndex =listImg.length -1
    }else{
        currenIndex--
    }
    imgFeature.style.animation = ''
    setTimeout(()=>{
        updateImageByIndex(currenIndex)
        imgFeature.style.animation = 'slideLeft 1s ease-in-out forwards'
    },200)
})
nextBtn.addEventListener('click', e=>{
    if(currenIndex == listImg.length - 1){
        currenIndex = 0
    }else{
        currenIndex++
    }
    imgFeature.style.animation = ''
    setTimeout(()=>{
        updateImageByIndex(currenIndex)
        imgFeature.style.animation = 'slideRight 1s ease-in-out forwards'
    },200)
})
updateImageByIndex(0)
const itemsliderbar = document.querySelectorAll(".cartegory-left-li")
itemsliderbar.forEach(function(menu,index){
  menu.addEventListener("click",function(){
      menu.classList.toggle("block")
  })
})



  const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
  const imgContainer = document.querySelector('.aspect-ratio-169')
  const dotItem = document.querySelectorAll(".dot")
  imgNumber = imgPosition.length
  let index = 0
  //console.log(imgPosition)
  imgPosition.forEach(function (image, index) {
      image.style.left = index * 100 + "%"
      dotItem[index].addEventListener("click", function () {
          slider(index)
      })
      /*cong viec may thg nay` la` de anh? 4 cai' chong` nhau
      */
  })
  function imgSlide() {
      index++;
      console.log(index)
      if (index >= imgNumber) {
          index = 0
      }
      slider(index)
      // function slider(index)
      //{imgContainer.style.left= "-"+index*100+"%"}
  }
  function slider(index) {
      imgContainer.style.left = "-" + index * 100 + "%"
      const dotActive = document.querySelector('.active')
      dotActive.classList.remove("active")
      dotItem[index].classList.add("active")
  }
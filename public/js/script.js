const brand_name_add=document.getElementById('brand_name_add');
const brand_add=document.getElementById('brand_add')
const brand_add_error=document.getElementById('brand_add_error')
brand_add.addEventListener('submit',(e)=>{
    let messages = []
    var letters = /^[0-9a-zA-Z]/;
  if (brand_name_add.value === '' || brand_name_add.value == null) {
    messages.push('Brand name is mandatory')
  }
  if (brand_name_add.length>50) {
    messages.push('Brand name maximum length is 50')
  }
  
  
    if (!brand_name_add.value.match(letters)) {
        messages.push('Brand name can only allow alphanumeric characters')
    }


    if(messages.length>0){
        e.preventDefault()
        brand_add_error.innerText=messages.join( ',')
    }

})

const brand_name_edit=document.getElementById('brand_name_edit');
const brand_edit=document.getElementById('brand_edit1')
const brand_edit_error=document.getElementById('brand_edit_error')
brand_edit.addEventListener('submit',(e)=>{
    let messages = []
    var letters = /^[0-9a-zA-Z]+$/;
  if (brand_name_edit.value === '' || brand_name_edit.value == null) {
    messages.push('Brand name is mandatory')
  }
  if (brand_name_edit.length>50) {
    messages.push('Brand name maximum length is 50')
  }
 
    if (!brand_name_edit.value.match(letters)) {
        messages.push('Brand name can only allow alphanumeric characters')
    }


    if(messages.length>0){
        e.preventDefault()
        brand_edit_error.innerText=messages.join( ',')
    }

})


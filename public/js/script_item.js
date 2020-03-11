const item_name_add=document.getElementById('item_name_add');
const item_add_1=document.getElementById('item_add_1')
const item_add_error=document.getElementById('item_add_error')
item_add_1.addEventListener('submit',(e)=>{
    let messages = []
    var letters = /^[0-9a-zA-Z]/;
  if (item_name_add.value === '' || item_name_add.value == null) {
    messages.push('Item name is mandatory')
  }
  if (item_name_add.length>255) {
    messages.push('Item name maximum length is 255')
  }
 
    if (!item_name_add.value.match(letters)) {
        messages.push('Item name can only allow alphanumeric characters')
    }


    if(messages.length>0){
        e.preventDefault()
        item_add_error.innerText=messages.join( ',')
    }

})

const item_name_edit=document.getElementById('item_name_edit');
const item_edit_1=document.getElementById('item_edit_1')
const item_edit_error=document.getElementById('item_edit_error')
item_edit_1.addEventListener('submit',(e)=>{
    let messages = []
    var letters = /^[0-9a-zA-Z]+$/;
  if (item_name_edit.value === '' || item_name_edit.value == null) {
    messages.push('Item name is mandatory')
  }
  if (item_name_edit.length>255) {
    messages.push('Item name maximum length is 255')
  }
 
    if (!item_name_edit.value.match(letters)) {
        messages.push('Item name can only allow alphanumeric characters')
    }


    if(messages.length>0){
        e.preventDefault()
        item_edit_error.innerText=messages.join( ',')
    }

})



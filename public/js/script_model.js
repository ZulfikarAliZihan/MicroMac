const model_name_add=document.getElementById('nq');
const model_add_1=document.getElementById('aq')
const model_add_error=document.getElementById('dq')
model_add_1.addEventListener('submit',(e)=>{
    let messages = []
    var letters = /^[0-9a-zA-Z]/;
  if (model_name_add.value === '' || model_name_add.value == null) {
    messages.push('Model name is mandatory')
  }
  if (model_name_add.length>100) {
    messages.push('Model name maximum length is 100')
  }
 
    if (!model_name_add.value.match(letters)) {
        messages.push('Model name can only allow alphanumeric characters')
    }


    if(messages.length>0){
        e.preventDefault()
        model_add_error.innerText=messages.join( ',')
    }

})

const model_name_edit=document.getElementById('model_name_edit');
const model_edit_1=document.getElementById('model_edit_1')
const model_edit_error=document.getElementById('model_edit_error')
model_edit_1.addEventListener('submit',(e)=>{
    let messages = []
    var letters = /^[0-9a-zA-Z]+$/;
  if (model_name_edit.value === '' || model_name_edit.value == null) {
    messages.push('Model name is mandatory')
  }
  if (model_name_edit.length>100) {
    messages.push('Model name maximum length is 100')
  }
 
    if (!model_name_edit.value.match(letters)) {
        messages.push('Model name can only allow alphanumeric characters')
    }


    if(messages.length>0){
        e.preventDefault()
        model_edit_error.innerText=messages.join( ',')
    }

})

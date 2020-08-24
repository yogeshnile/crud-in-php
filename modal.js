edits = document.getElementsByClassName('edit');
Array.from(edits).forEach((element)=>{
  element.addEventListener("click", (e)=>{
    tr = e.target.parentNode.parentNode;
    title = tr.getElementsByTagName("td")[0].innerText;
    discription = tr.getElementsByTagName("td")[1].innerText;
    titleEdit.value = title;
    discEdit.value = discription;
    snoEdit.value = e.target.id;
    console.log(e.target.id);
    $('#editModal').modal('toggle');
  })
})

deletes = document.getElementsByClassName('delete');
Array.from(deletes).forEach((element)=>{
  element.addEventListener("click", (e)=>{
    tr = e.target.parentNode.parentNode;
    sno = e.target.id.substr(1);
    if (confirm("Are you sure you want to delete this note!")) {
    window.location = `/crud-in-php/?delete=${sno}`;
    }
  })
})
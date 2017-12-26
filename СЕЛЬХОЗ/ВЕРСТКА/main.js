function toggle() {
  var div = document.getElementById('wb_Text_sravnenie');
  if(this.checked)
    div.style.display = 'block';
  else
    div.style.display = 'none'
    }
document.getElementById('Checkbox1').onchange = toggle;
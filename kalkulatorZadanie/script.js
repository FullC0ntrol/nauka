let a = document.getElementById("liczba1").value;
let b = document.getElementById("liczba2").value;
let c = document.getElementsByName("rodzajDzialania");
let v;
function dzialanie() {
  for (var i = 0; i < c.length; i++) {
    if (c[i].checked) {
      v = c[i].value;
    }
  }
  switch(v) 
    {
        case '+':
            var result = parseFloat(a) + parseFloat(b);         
        break;
        case '-':
            var result = parseFloat(a) - parseFloat(b);         
        break;  
        case '*':
            var result = parseFloat(a) * parseFloat(b);         
        break;  
        case '/':
            var result = parseFloat(a) / parseFloat(b);         
        break;    
    }
    wypisanieWyniku(result);
}
function wypisanieWyniku(result){
  var wynik = document.getElementById("wynik");
  wynik.innerHTML += result;
  alert(result);
}

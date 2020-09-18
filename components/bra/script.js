
/*
* Helping variables
*
*
*/
is_error = false;

/*
* Helping functions
* most often used by other func
*
*/

function _$(el) {
 let len = [...document.querySelectorAll(el)].length;
 if (len > 1) {
     return [...document.querySelectorAll(el)];
 } else {
     return document.querySelector(el);
 }
}

function hide(el) {
 document.querySelectorAll(el).forEach((item) => {
     item.style.display = 'none'
 })
}

function show(el) {
 document.querySelectorAll(el).forEach((item) => {
     item.style.display = 'block'
 })
}

function click(el, _f) {
 document.querySelectorAll(el).forEach((item) => {
     item.addEventListener('click', function (e) {
         _f(e)
     })
 })
}

function updateCalcNav(next) {
 for (let i = 0; i < next; i++) {
     let n;
     (i !== next - 1) ? n = 'before-active' : n = 'active';
     _$('.calc-tabs li')[i].classList.add(n);
 }
}

function checkingInput(next) {
 let curr = next - 1;
 let inp = _$('#tab' + curr).querySelector('input');
 if (inp !== null) {
     let inp_val = parseInt(inp.value);
     let min = parseInt(inp.dataset.min)
     let max = parseInt(inp.dataset.max)
     if (!inp_val || inp_val < min || inp_val > max) {
         show('#error_step'+ (next-2))
         is_error = true;
     } else {
         is_error = false;
     }
 }
}

function nextslide(elem) {
 let next_numb = parseInt(elem.replace(/\D+/g, ""))
 checkingInput(next_numb)
 if (is_error == true) {
     return
 }
 updateCalcNav(next_numb)
 hide('.tab-pane')
 show(elem)
}

function calcsize() {
 var bandsize = document.getElementById("band_size").value;
 var bustsize = document.getElementById("cup_size").value;
 var size, cup = "A";
 if (bandsize >= 63 && bandsize <= 67)
     size = 30;
 if (bandsize >= 68 && bandsize <= 72)
     size = 32;
 if (bandsize >= 73 && bandsize <= 77)
     size = 34;
 if (bandsize >= 78 && bandsize <= 82)
     size = 36;
 if (bandsize >= 83 && bandsize <= 87)
     size = 38;
 if (bandsize >= 88 && bandsize <= 92)
     size = 40;
 if (bandsize >= 93 && bandsize <= 97)
     size = 42;
 if (bandsize >= 98 && bandsize <= 102)
     size = 44;
 if (bandsize >= 103 && bandsize <= 107)
     size = 46;
 if (size == 30) {
     if (bustsize >= 77 && bustsize <= 79)
         cup = "A";
     if (bustsize >= 79 && bustsize <= 81)
         cup = "B";
     if (bustsize >= 81 && bustsize <= 83)
         cup = "C";
     if (bustsize >= 83 && bustsize <= 85)
         cup = "D";
     if (bustsize >= 85 && bustsize <= 88)
         cup = "DD";
     if (bustsize >= 88 && bustsize <= 91)
         cup = "E";
     if (bustsize >= 92 && bustsize <= 95)
         cup = "F";
     if (bustsize >= 96 && bustsize <= 99)
         cup = "FF";
     if (bustsize >= 100 && bustsize <= 103)
         cup = "G";
 } else if (size == 32) {
     if (bustsize >= 82 && bustsize <= 83)
         cup = "A";
     if (bustsize >= 84 && bustsize <= 86)
         cup = "B";
     if (bustsize >= 87 && bustsize <= 88)
         cup = "C";
     if (bustsize >= 89 && bustsize <= 90)
         cup = "D";
     if (bustsize >= 90 && bustsize <= 93)
         cup = "DD";
     if (bustsize >= 94 && bustsize <= 97)
         cup = "E";
     if (bustsize >= 98 && bustsize <= 100)
         cup = "F";
     if (bustsize >= 101 && bustsize <= 104)
         cup = "FF";
     if (bustsize >= 105 && bustsize <= 108)
         cup = "G";
 } else if (size == 34) {
     if (bustsize >= 87 && bustsize <= 88)
         cup = "A";
     if (bustsize >= 89 && bustsize <= 91)
         cup = "B";
     if (bustsize >= 92 && bustsize <= 93)
         cup = "C";
     if (bustsize >= 94 && bustsize <= 96)
         cup = "D";
     if (bustsize >= 97 && bustsize <= 100)
         cup = "DD";
     if (bustsize >= 101 && bustsize <= 104)
         cup = "E";
     if (bustsize >= 105 && bustsize <= 108)
         cup = "F";
     if (bustsize >= 109 && bustsize <= 112)
         cup = "FF";
     if (bustsize >= 113 && bustsize <= 116)
         cup = "G";
 } else if (size == 36) {
     if (bustsize >= 92 && bustsize <= 93)
         cup = "A";
     if (bustsize >= 94 && bustsize <= 96)
         cup = "B";
     if (bustsize >= 97 && bustsize <= 98)
         cup = "C";
     if (bustsize >= 99 && bustsize <= 101)
         cup = "D";
     if (bustsize >= 102 && bustsize <= 105)
         cup = "DD";
     if (bustsize >= 106 && bustsize <= 109)
         cup = "E";
     if (bustsize >= 110 && bustsize <= 113)
         cup = "F";
     if (bustsize >= 114 && bustsize <= 117)
         cup = "FF";
     if (bustsize >= 118 && bustsize <= 121)
         cup = "G";
 } else if (size == 38) {
     if (bustsize >= 96 && bustsize <= 98)
         cup = "A";
     if (bustsize >= 99 && bustsize <= 101)
         cup = "B";
     if (bustsize >= 102 && bustsize <= 103)
         cup = "C";
     if (bustsize >= 104 && bustsize <= 106)
         cup = "D";
     if (bustsize >= 107 && bustsize <= 110)
         cup = "DD";
     if (bustsize >= 111 && bustsize <= 114)
         cup = "E";
     if (bustsize >= 115 && bustsize <= 118)
         cup = "F";
     if (bustsize >= 119 && bustsize <= 122)
         cup = "FF";
     if (bustsize >= 123 && bustsize <= 126)
         cup = "G";
 } else if (size == 40) {
     if (bustsize >= 102 && bustsize <= 103)
         cup = "A";
     if (bustsize >= 104 && bustsize <= 106)
         cup = "B";
     if (bustsize >= 107 && bustsize <= 108)
         cup = "C";
     if (bustsize >= 109 && bustsize <= 111)
         cup = "D";
     if (bustsize >= 112 && bustsize <= 115)
         cup = "DD";
     if (bustsize >= 116 && bustsize <= 119)
         cup = "E";
     if (bustsize >= 120 && bustsize <= 123)
         cup = "F";
     if (bustsize >= 124 && bustsize <= 127)
         cup = "FF";
     if (bustsize >= 128 && bustsize <= 131)
         cup = "G";
 } else if (size == 42) {
     if (bustsize >= 107 && bustsize <= 108)
         cup = "A";
     if (bustsize >= 109 && bustsize <= 111)
         cup = "B";
     if (bustsize >= 112 && bustsize <= 113)
         cup = "C";
     if (bustsize >= 114 && bustsize <= 116)
         cup = "D";
     if (bustsize >= 117 && bustsize <= 120)
         cup = "DD";
     if (bustsize >= 121 && bustsize <= 124)
         cup = "E";
     if (bustsize >= 125 && bustsize <= 128)
         cup = "F";
     if (bustsize >= 129 && bustsize <= 132)
         cup = "FF";
     if (bustsize >= 133 && bustsize <= 136)
         cup = "G";
 } else if (size == 44) {
     if (bustsize >= 112 && bustsize <= 113)
         cup = "A";
     if (bustsize >= 114 && bustsize <= 116)
         cup = "B";
     if (bustsize >= 117 && bustsize <= 118)
         cup = "C";
     if (bustsize >= 119 && bustsize <= 121)
         cup = "D";
     if (bustsize >= 122 && bustsize <= 125)
         cup = "DD";
     if (bustsize >= 126 && bustsize <= 129)
         cup = "E";
     if (bustsize >= 130 && bustsize <= 133)
         cup = "F";
     if (bustsize >= 134 && bustsize <= 137)
         cup = "FF";
     if (bustsize >= 138 && bustsize <= 141)
         cup = "G";
 } else if (size == 46) {
     if (bustsize >= 117 && bustsize <= 119)
         cup = "A";
     if (bustsize >= 119 && bustsize <= 121)
         cup = "B";
     if (bustsize >= 122 && bustsize <= 123)
         cup = "C";
     if (bustsize >= 123 && bustsize <= 126)
         cup = "D";
     if (bustsize >= 127 && bustsize <= 130)
         cup = "DD";
     if (bustsize >= 131 && bustsize <= 134)
         cup = "E";
     if (bustsize >= 135 && bustsize <= 138)
         cup = "F";
     if (bustsize >= 139 && bustsize <= 142)
         cup = "FF";
     if (bustsize >= 143 && bustsize <= 146)
         cup = "G";
 }
 var data = size + cup;
 document.getElementById("result").innerHTML = data;
}
function tryagain(){
     _$('.calc-tabs li').forEach(item=>{
         item.classList = ''
     });
     hide('.tab-pane')
     show('#tab1')
}

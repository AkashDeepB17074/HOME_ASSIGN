<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
   <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
 
       <title>Laravel</title>
 
       <!-- Fonts -->
       <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
 
       <script src="https://kit.fontawesome.com/2d37f2dec9.js"></script>
       <!-- Styles -->
       <style>
           /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
       </style>
 
 <style>
        body{
            /* background-image: linear-gradient(90deg,rgb(244, 242, 247), #C4E0E5); */
            margin:0;
            padding: 0;
        }

        .container{
            background-image: linear-gradient(120deg,#ff9a9e,#fad0c4);
            height: 700px;
            width: 550px;
            margin-top: 150px;
            margin-left: 50%;
            transform: translateX(-50%);
            border-radius: 20px;
            box-shadow: 6px 6px 6px#3e3f3f;
        }
        .search-bar{
            position: absolute;
            left: 50%;
            transform: translate(-50%, 0%);
            margin-top: 25px;
            height: 30px;
            background: #2f3640;
            border-radius: 40px;
            padding: 10px;
            transition: .5s;
        }

        .search-btn{
            color: #e84118;
            float: right;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: 2f3640;
            display: flex;
            justify-content: center;
            align-items: center;
            
            transition: .5s;
        }

        .input_bar{
            border: none;
            background: none;
            outline: none;
            float: left;
            padding: 0;
            color:white;
            font-size: 16px;
            transition: 0.4s;
            line-height: 30px;
            width: 0px; 
            transition: .5s;
        }
        
        .search-bar:hover>.input_bar{
            width: 200px;  
            padding: 0 6px;
            
            transition: .5s;          
        }
        a{
            text-decoration: none;
        }

        .list{
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            margin-top: 100px;
            width: 500px;
            /* background: red; */
        }
        table{
            border: none;

        }
        table th{
            background: #2f3640;
            width: 500px;
            height: 40px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            color: #fff;
            text-transform: uppercase;
        }
        .element{
            background-image: linear-gradient(120deg, #2E86C1, rgb(101, 144, 173));  
            color: #1d0555;
            /* color: #fff; */
            border-bottom: #2f3640 solid 5px;
            font-weight: bold;
        }
        tr:nth-child(odd){
            color: black;
            background-image: linear-gradient(120deg, #fff, rgb(228, 224, 224));
        }
        tr:nth-last-child(){
            color: red;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        .checkbox{
            width: 45px;
            height: 45px; 
            align-content: center;
            justify-content: center;
            align-items: center;
            
        }
        .fa-check, .fa-times, .fa-trash-alt{
            margin-left: 35%;
        }
        .element_todo{
            padding-left: 10px;
        }
        .item{
            margin-left: 5px;
            height:33px;
            width: 33px;
        }
    </style>

   </head>
   <body>
       <div id="app">
           <app>
           <div class="container">
        <div class="search-bar">
        <input class="input_bar" id="input"type="text" placeholder="Enter Todo">
        <div onclick="search()" id="button_add" class='search-btn'>
            <i class="fas fa-plus"></i>
        </div>
        </div>
        <div class="list">
            <table id="table_body">
                <th colspan="3">
                    My todo
                </th>
                   <!-- <tr class="element">
                        <td class="checkbox" onclick="check_box(1, 0)"><i class="fas fa-check"></i></td> <td class="element_todo">How list works</td>
                        <td class="checkbox" onclick="delete_item(1)"><i class="fas fa-trash-alt"></i></td>
                </tr>
                <tr class="element">
                        <td class="checkbox"><i class="fas fa-times"></i></td> <td class="element_todo">Bali kahan h re bosdi</td>
                        <td class="checkbox" onclick="delete_item(2)"><i class="fas fa-trash-alt"></i></td>
                </tr> -->
            </table>
        </div>
    </div>
    <script>
        // var nut = document.addEventListener('click', event =>{
        //     // console.log('hey here')
        //     // console.log(event.path[0])
        // })
        document.addEventListener('keydown',event =>{
            if(event.key == 'Enter'){
                search()
            }
        })
        function search(){
            var table_body = document.getElementById('table_body')
            var todo = document.createTextNode(document.getElementById('input').value)
            if(document.getElementById('input').value === ""){
                return false
            }
            for(let i=0;  i<document.getElementsByTagName('tr').length; i++){
                if(document.getElementById('input').value === document.getElementsByTagName('tr')[i].childNodes[1].innerText){
                    alert('todo Alredy Exist');
                    return false;
                }
            }
            var table_row = document.createElement('tr')
            var node_check = document.createElement('td')
            var node_text = document.createElement('td')
            var node_trash = document.createElement('td')

            node_check.setAttribute('class', 'checkbox')
            node_trash.setAttribute('class', 'checkbox')
            node_text.setAttribute('class', 'element_todo')
            table_row.setAttribute('class', 'element')

            var check_png = document.createElement('i')
            check_png.setAttribute('class', 'fas fa-times')
            node_check.appendChild(check_png)

            var trash_png = document.createElement('i')
            trash_png.setAttribute('class', 'fas fa-trash-alt')
            node_trash.appendChild(trash_png)

            node_trash.setAttribute('onclick', 'delete_item(this)') 
            node_check.setAttribute('onclick', 'check_box(this)')



            node_text.appendChild(todo)
            table_row.appendChild(node_check)
            table_row.appendChild(node_text)
            table_row.appendChild(node_trash)
            table_body.appendChild(table_row)  
            document.getElementById('input').value =""
        }
         function delete_item(c){
             c.parentElement.remove()
         }
         function check_box(obj){
             if(obj.childNodes[0].classList[1] == "fa-times"){
                obj.childNodes[0].classList.replace('fa-times', 'fa-check')
                }
             else{
                obj.childNodes[0].classList.replace('fa-check', 'fa-times')
                }
         }

    </script> 
           </app>

       </div>
   </body>
   <script src="<?php echo e(mix('js/app.js')); ?>"> </script>
 
</html>
 

<?php /**PATH E:\Laravel\todolist\resources\views/welcome.blade.php ENDPATH**/ ?>
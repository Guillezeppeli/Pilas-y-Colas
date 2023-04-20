//Stack

//LIFO Y FIFO
//LIFO => Last in first out
//FIFO => First In First Out

let stack = [1,2,3,4,5];

function add(value){
    stack.push(value);
}


function destroy(){
    stack.pop();
}



function Pila(){
    let datos = [1,2,3,4,5];

    this.prototype.add = value => datos.push(value);
    this.prototype.destroy = () => datos.pop();

}


    Pila.prototype.add = value => datos.push(value);
    Pila.prototype.destroy = () => datos.pop();

    
//Metodos que permitan introducir y borrar datos
//Hacer un metodo para mostrar los datos


  



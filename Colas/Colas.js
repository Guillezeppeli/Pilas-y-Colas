//Queue

//FIFO => First In First Out

function Queue(){
    

}

let cola = [];

Queue.prototype.enqueque = value => cola.push(value);

Queue.prototype.dequeue = () => cola.shift();

Queue.prototype.size = () => cola.length();

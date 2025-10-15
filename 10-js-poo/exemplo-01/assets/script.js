console.log("JS - POO");

class Person {

    #name;
    #age;

    constructor(name, age) {
        console.log("Olá, eu sou uma pessoa!");
        this.#name = name;
        this.#age = age;
    }

    // Getters
    getName () {
        return this.#name;
    }

    getAge () {
        return this.#age;
    }

    // Setters
    setName (name) {
        this.#name = name;
    }

    setAge (age) {
        this.#age = age;
    }

    speak () {
        console.log(`Eu sou uma pessoa e me chamo ${this.#name} ${this.#age}`);
    }
}

class Car {
    #brand;
    #model;
    #year;
    constructor(brand, model, year) {
        this.#brand = brand;
        this.#model = model;
        this.#year = year;
    }
    // Getter and Setters
    showCar = function () {
        console.log(`Eu sou um caro da marca ${this.#brand}`)
    }
}

const carUno = new Car("Fiat", "Uno", 2000);
carUno.showCar();

const fabio = new Person("Fábio", 49);
console.log(fabio.getName(), fabio.getAge());
fabio.speak();


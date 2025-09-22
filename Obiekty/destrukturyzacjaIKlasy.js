const tab = [1, 2, 3, 4, 5];

// const x = tab[0];
// const y = tab[1];
// const z = tab[2];

const [x, y, z, ...rest] = tab;

const ob = {
    name : "Kura",
    pet: "Kot"
}

// const name = ob.name;
// const pet = ob["pet"];

// let {name, pet} = ob;

let currentUser = {
    name: "John",
    surname: "Doe",
    email: "a@a.a",
    www: "http://example.com",
    userType: "admin",
    isActive: false
};

let {name, surname, email, www, userType, isActive} = currentUser;

let secondUser = {...currentUser};

class Rectangle {
    constructor(height, width) {
        if(height <= 0 || width <= 0) {
            throw new Error("Height and width must be positive numbers.");
        }
        this.height = height;
        this.width = width;
    }

    showArea() {
        return this.width * this.height;
    }

    showPerimeter() {
        return 2 * (this.width + this.height);
    }

    isSquare() {
        return height === width;
    }

    static compare(rect1, rect2) {
        return rect1.showArea() > rect2.showArea() ? 1 : (rect1.showArea() < rect2.showArea() ? -1 : 0);
    }
}

class Cuboid {
    constructor(height, width, depth) {
        if(height <= 0 || width <= 0 || depth <= 0) {
            throw new Error("Height, width, and depth must be positive numbers.");
        }
        this.height = height;
        this.width = width;
        this.depth = depth;
    }

    showVolume() {
        return this.width * this.height * this.depth;
    }

    showSurfaceArea() {
        return 2 * (this.width * this.height + this.height * this.depth + this.width * this.depth);
    }
}
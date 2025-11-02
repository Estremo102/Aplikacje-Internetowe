// Zadanie 1
const rectangle = {
    height: 5,
    width: 10,
    showArea() {
        return this.height * this.width;
    }
};
const circle = {
    radius: 7,
    showArea() {
        return Math.PI * this.radius * this.radius;
    }
};
console.log(rectangle);
console.log(circle);
console.log(`Kwadrat ma szerokość ${rectangle.width} i wysokość ${rectangle.height}`);
console.log(`Jego pole to ${rectangle.showArea()}`);
console.log(`Koło ma promień ${circle.radius}`);
console.log(`Jego pole to ${circle.showArea()}`);

// Zadanie 2
const currentUser = {
    name: "Jan",
    surname: "Kowalski",
    email: "jan.kowalski@example.com",
    www: "https://example.com",
    userType: "admin",
    isActive: true,
    show() {
        console.log(this);
    },
    setActive(active) {
        this.isActive = !!active;
    }
};
currentUser.show();
currentUser.setActive(false);
currentUser.show();

// Zadanie 3
const book = {
    title: "Wiedźmin",
    author: "Andrzej Sapkowski",
    pageCount: 320,
    publisher: "SuperNOWA",
    showDetails() {
        // for in
        for (let key in this) {
            if (typeof this[key] !== "function") {
                console.log(key, this[key]);
            }
        }
        // Object.keys
        Object.keys(this).forEach(key => {
            if (typeof this[key] !== "function") {
                console.log(key, this[key]);
            }
        });
        // Object.values
        Object.values(this).forEach(val => {
            if (typeof val !== "function") {
                console.log(val);
            }
        });
        // Object.entries
        Object.entries(this).forEach(([key, val]) => {
            if (typeof val !== "function") {
                console.log(key, val);
            }
        });
    }
};
book.showDetails();

// Zadanie 4
const spaceShip = {
    name: "Enterprise",
    currentLocation: "Earth",
    flyDistance: 0,
    flyTo(place, distance) {
        this.currentLocation = place;
        this.flyDistance += distance;
    },
    showInfo() {
        console.log(`Informacje o statku:\n----\nStatek ${this.name}\ndoleciał do miejsca ${this.currentLocation}\nStatek przeleciał już całkowity dystans ${this.flyDistance}`);
    },
    meetClingon() {
        let wins = 0;
        for (let i = 0; i < 100; i++) {
            if (Math.random() > 0.5) wins++;
        }
        if (wins >= 50) {
            console.log(`Statek ${this.name} będący w okolicy ${this.currentLocation} zwycięsko wyszedł ze spotkania z Klingonami`);
        } else {
            console.warn(`Statek ${this.name} będący w okolicy ${this.currentLocation} został pokonany przez Klingonów`);
        }
    }
};
spaceShip.flyTo("Mars", 225);
spaceShip.showInfo();
spaceShip.meetClingon();

// Zadanie 5
const bookUsers = {
    users: [],
    addUser(name, age, phone) {
        this.users.push({ name, age, phone });
    },
    showUsers() {
        console.log("Wszyscy użytkownicy w książce:");
        this.users.forEach(u => console.log(u));
    },
    findByName(name) {
        const found = this.users.find(u => u.name === name);
        console.log(found || false);
    },
    findByPhone(phone) {
        const found = this.users.find(u => u.phone === phone);
        console.log(found || false);
    },
    getCount() {
        console.log(this.users.length);
    }
};
bookUsers.addUser("Jan", 30, "123456789");
bookUsers.addUser("Anna", 25, "987654321");
bookUsers.showUsers();
bookUsers.findByName("Anna");
bookUsers.findByPhone("123456789");
bookUsers.getCount();

// Zadanie 6
const tableGenerator = {
    randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    },
    generateIncTable(nr) {
        return Array.from({ length: nr + 1 }, (_, i) => i);
    },
    generateRandomTable(lng, min, max) {
        return Array.from({ length: lng }, () => this.randomNumber(min, max));
    },
    generateTableFromText(str) {
        return typeof str === "string" ? str.split(" ") : [];
    },
    getMaxFromTable(arr) {
        return Math.max(...arr);
    },
    getMinFromTable(arr) {
        return Math.min(...arr);
    },
    delete(arr, index) {
        arr.splice(index, 1);
        return arr;
    }
};
console.log(tableGenerator.generateIncTable(5));
console.log(tableGenerator.generateRandomTable(5, 1, 10));
console.log(tableGenerator.generateTableFromText("Ala ma kota"));
console.log(tableGenerator.getMaxFromTable([1, 5, 3]));
console.log(tableGenerator.getMinFromTable([1, 5, 3]));
console.log(tableGenerator.delete([1, 2, 3], 1));

// Zadanie 7
const text = {
    check(txt, word) {
        return txt.includes(word);
    },
    getCount(txt) {
        return txt.length;
    },
    getWordsCount(txt) {
        return typeof txt === "string" ? txt.trim().split(/\s+/).length : 0;
    },
    setCapitalize(txt) {
        return txt.split(" ").map(w => w.charAt(0).toUpperCase() + w.slice(1)).join(" ");
    },
    setMix(txt) {
        let res = "";
        for (let i = 0; i < txt.length; i++) {
            res += i % 2 === 0 ? txt[i].toLowerCase() : txt[i].toUpperCase();
        }
        return res;
    },
    generateRandom(lng) {
        let chars = "abcdefghijklmnopqrstuvwxyz";
        let out = "";
        for (let i = 0; i < lng; i++) {
            out += chars[Math.floor(Math.random() * chars.length)];
        }
        return out;
    }
};
console.log(text.check("ala ma kota", "kota"));
console.log(text.getCount("ala ma kota"));
console.log(text.getWordsCount("Ala ma kota"));
console.log(text.setCapitalize("ala ma kota"));
console.log(text.setMix("ala ma kota"));
console.log(text.generateRandom(10));

window.rectangle = rectangle;
window.circle = circle;
window.currentUser = currentUser;
window.book = book;
window.spaceShip = spaceShip;
window.bookUsers = bookUsers;
window.tableGenerator = tableGenerator;
window.text = text;
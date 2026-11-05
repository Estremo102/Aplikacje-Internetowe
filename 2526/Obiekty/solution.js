let rectangle = {
    width: 10,
    height: 5,
    showArea() {
        return this.width * this.height;
    }
};

let circle = {
    radius: 5,
    showArea: function() {
        return Math.PI * this.radius * this.radius;
    }
};


console.log(rectangle);
console.log(circle);

let currentUser = {
    name: "John",
    surname: "Doe",
    email: "a@a.a",
    www: "http://example.com",
    userType: "admin",
    isActive: false,
    show(){
        return `${this.name} ${this.surname} (${this.email}) - ${this.userType} - ${this.isActive ? 'active' : 'inactive'}`;
    },
    setActive(status){
        this.isActive = status;
    }
};

book = {
    title: "The Great Gatsby",
    author: "F. Scott Fitzgerald",
    pageCount: 180,
    publisher: "Scribner",
    showDetails(){
        for(const key in this){
            if(typeof this[key] !== 'function'){
                console.log(`${key}: ${this[key]}`);
            }
        }

        Object.keys(this).forEach(key => {
            if(typeof this[key] !== 'function'){
                console.log(`${key}: ${this[key]}`);
            }
        });
        Object.entries(this).forEach(([key, value]) => {
            if(typeof value !== 'function'){
                console.log(`${key}: ${value}`);
            }
        });
    }
}

spaceShip = {
    name: 'Enterprise',
    currentLocation: 'Earth',
    flyDistance: 0,
    flyTo(place, distance){
        this.currentLocation = place,
        this.flyDistance += distance; 
    },
    showInfo(){
        console.log(`Informacje o statku: \n Statek ${this.name}\ndoleciał do miejsca ${this.currentLocation}\nStatek przeleciał już całkowity dystans ${this.flyDistance}`);
    },
    meetClingon(){
        let wins = 0;
        for(let i = 0; i < 100; i++){
            if(Math.random() < 0.5) wins++;
        }
        if(wins > 50){
            console.log(`Statek ${this.name} będący w okolicy ${this.currentLocation} zwycięsko wyszedł ze spotkania z Klingonami`);
        }else{
            console.log(`Statek ${this.name} będący w okolicy ${this.currentLocation} został pokonany przez Klingonów`);
        }
    }
}

bookUsers = {
    users: [],
    addUser(name, age, phone){
        this.users.push({name, age, phone});
    },
    showUsers(){
        this.users.forEach(user => {
            console.log(`Name: ${user.name}, Age: ${user.age}, Phone: ${user.phone}`);
        });
    },
    findByName(name){
        const found = this.book.filter(user => user.name.toLowerCase().includes(name.toLowerCase()));
        console.log(found || false);
    },
    findByPhone(phone){
        const found = this.book.filter(user => user.phone.includes(phone));
        console.log(found || false);
    },
    getCount(){
        console.log(this.book.length);
    }
}

let tableGenerator = {
    randomNumber(min, max){
        return Math.floor(Math.random() * (max - min + 1)) + min;
    },
    generateIncTable(nr){
        const table = [];
        for(let i = 0; i < nr; i++){
            table.push(i + 1);
        }
        return table;
    },
    generateRandomTable(nr, min, max){
        const table = [];
        for(let i = 0; i < nr; i++){
            table.push(this.randomNumber(min, max));
        }
        return table;
    },
    generateTableFromText(text){
        return text.split(' ').map(word => word.length);
    },
    getMaxFromTable(table){
        return Math.max(...table);
    },
    getMinFromTable(table){
        return Math.min(...table);
    },
    delete(table, index){
        if(index >= 0 && index < table.length){
            table.splice(index, 1);
        }
        return table;
    }
}

let text = {
    check(txt, word){
        return txt.includes(word);
    },
    getCount(txt){
        return txt.length;
    },
    getWordsCount(txt){
        return typeof txt === "string" ? txt.split(' ').length : 0;
    },
    setCapitalize(txt){
        return txt.charAt(0).toUpperCase() + txt.slice(1).toLowerCase();
    },
    setMix(txt){
        let res = "";
        for(let i = 0; i < txt.length; i++){
            res += i % 2 === 0 ? txt[i].toLowerCase() : txt[i].toUpperCase();
        }
        return res;
    },
    generateRandom(lng){
        let chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        let res = '';
        for(let i = 0; i < lng; i++){
            res += chars.charAt(Math.floor(Math.random() * chars.length));
        }
        return res;
    }
}

window.rectangle = rectangle;
window.circle = circle;
window.currentUser = currentUser;
window.book = book;
window.spaceShip = spaceShip;
window.bookUsers = bookUsers;
window.tableGenerator = tableGenerator;
window.text = text;
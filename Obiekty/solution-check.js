// Skrypt sprawdzający poprawność wykonania zadań i kolorujący odnośniki
window.onload = function() {
    // Funkcje sprawdzające każde zadanie
    const checks = [
        // Zadanie 1
        () => {
            try {
                if (!window.rectangle || !window.circle) return false;
                if (typeof rectangle.showArea !== 'function' || typeof circle.showArea !== 'function') return false;
                if (rectangle.showArea() !== rectangle.height * rectangle.width) return false;
                if (Math.abs(circle.showArea() - Math.PI * circle.radius * circle.radius) > 0.01) return false;
                return true;
            } catch { return false; }
        },
        // Zadanie 2
        () => {
            try {
                if (!window.currentUser) return false;
                const props = ['name','surname','email','www','userType','isActive'];
                for (const p of props) if (!(p in currentUser)) return false;
                if (typeof currentUser.show !== 'function' || typeof currentUser.setActive !== 'function') return false;
                return true;
            } catch { return false; }
        },
        // Zadanie 3
        () => {
            try {
                if (!window.book) return false;
                const props = ['title','author','pageCount','publisher'];
                for (const p of props) if (!(p in book)) return false;
                if (typeof book.showDetails !== 'function') return false;
                return true;
            } catch { return false; }
        },
        // Zadanie 4
        () => {
            try {
                if (!window.spaceShip) return false;
                const props = ['name','currentLocation','flyDistance'];
                for (const p of props) if (!(p in spaceShip)) return false;
                if (typeof spaceShip.flyTo !== 'function' || typeof spaceShip.showInfo !== 'function' || typeof spaceShip.meetClingon !== 'function') return false;
                return true;
            } catch { return false; }
        },
        // Zadanie 5
        () => {
            try {
                if (!window.bookUsers) return false;
                if (!Array.isArray(bookUsers.users)) return false;
                if (typeof bookUsers.addUser !== 'function' || typeof bookUsers.showUsers !== 'function' || typeof bookUsers.findByName !== 'function' || typeof bookUsers.findByPhone !== 'function' || typeof bookUsers.getCount !== 'function') return false;
                return true;
            } catch { return false; }
        },
        // Zadanie 6
        () => {
            try {
                if (!window.tableGenerator) return false;
                const methods = ['randomNumber','generateIncTable','generateRandomTable','generateTableFromText','getMaxFromTable','getMinFromTable','delete'];
                for (const m of methods) if (typeof tableGenerator[m] !== 'function') return false;
                return true;
            } catch { return false; }
        },
        // Zadanie 7
        () => {
            try {
                if (!window.text) return false;
                const methods = ['check','getCount','getWordsCount','setCapitalize','setMix','generateRandom'];
                for (const m of methods) if (typeof text[m] !== 'function') return false;
                return true;
            } catch { return false; }
        }
    ];

    // Pobierz odnośniki z panelu bocznego
    const navLinks = document.querySelectorAll('.sidebar a');
    checks.forEach((check, i) => {
    // debug.log(check());
        if (check()) {
            navLinks[i].classList.add('done');
        }
    });
}


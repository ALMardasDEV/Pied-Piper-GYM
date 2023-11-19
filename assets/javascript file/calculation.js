function discount(Age, Month) {
        this.month = Month;
        this.age = Age;

        this.ageDiscount = function () {
            var age_discount = 0;
            switch (true) {
                case this.age <= 18: age_discount = 0.09;
                    break;
                case this.age <= 30: age_discount = 0;
                    break;
                case this.age <= 60: age_discount = 0.1;
                    break;
                default: age_discount = 0.2;
            }
            return age_discount;
        };

        this.monthDiscount = function () {
            var month_discount = 0;
            switch (true) {
                case this.month < 6: month_discount = 0;
                    break;
                case this.month < 12: month_discount = 0.4;
                    break;
                default: month_discount = 0.6;
            }
            return month_discount;
        };

        return this.ageDiscount() + this.monthDiscount();
    }

    function calculation(Age, Month, List) {
        this.bill = 0;
        for (var x of List) this.bill += x;
        return this.bill - this.bill * discount(Age, Month);
    }

    var age = prompt("Your age is:" )
    var month = prompt("How month you want :" )
    var list=[3,5,10]
    if (confirm(" you don't want swimming pool?"))  list[0]=0;
    if (confirm(" you don't want cardio"))  list[1]=0;
    if (confirm(" you don't want fitness coach"))  list[2]=0;
    if (confirm(" your age is " + age + "\n you want to subscribr for" + month+ " months"))  {
        alert("you hsve "+ discount(age,month)*100 +"%, and you will pay:"+ calculation(age,month,list)+" OR")
    }
    
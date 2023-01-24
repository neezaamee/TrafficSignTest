function foo(select) {

    var mdate = $("#expdate").val().toString();
    var yearThen = parseInt(mdate.substring(0, 4), 10);
    var monthThen = parseInt(mdate.substring(5, 7), 10);
    var dayThen = parseInt(mdate.substring(8, 10), 10);

    var today = new Date();
    var birthday = new Date(yearThen, monthThen - 1, dayThen);

    var differenceInMilisecond = today.valueOf() - birthday.valueOf();

    var year_age = Math.floor(differenceInMilisecond / 31536000000);
    var day_age = Math.floor((differenceInMilisecond % 31536000000) / 86400000);
    //var month_age = Math.floor(day_age / 30);

    //day_age = day_age % 30;


    var category = select.options[select.selectedIndex].getAttribute("value");
    yearFine = 0;
    daysFine = 0;
    courierFee = 180;
    switch (category) {

        case "M/Cycle":
            renewalFeee = mcycle.renewalFee;
            duplicateFeee = mcycle.duplicateFee;
            total = mcycle.renewalFee + mcycle.fine30;
            if (year_age > 0 && day_age < 91) {
                yearFine = mcycle.fine365plus * year_age;
                daysFine = mcycle.fine90;
                total = total + (mcycle.fine365plus * year_age) + (mcycle.fine90);
                //total = "Tickets for more than 1 Year are Rs." + total;
            } else if (year_age > 0 && day_age < 366) {
                yearFine = mcycle.fine365plus * year_age;
                daysFine = mcycle.fine365;
                total = total + (mcycle.fine365plus * year_age) + (mcycle.fine365);
                //total = "Tickets for more than 1 Year are Rs." + total;
            } else {
                if (day_age < 31) {
                    //total = "Tickets within 30 days are Rs. " + total;
                } else if (day_age > 30 && day_age < 91) {
                    daysFine = mcycle.fine90;
                    total = total + mcycle.fine90;
                    //total = "Tickets for less than 90 days are Rs." + total;
                } else if (day_age > 90 && day_age < 366) {
                    daysFine = mcycle.fine365;
                    total = total + mcycle.fine365;
                    //total = "Tickets for more than 90 days are Rs." + total;
                }
            }
            break;
        case "Car":
            renewalFeee = car.renewalFee;
            duplicateFeee = car.duplicateFee;
            total = car.renewalFee + car.fine30;
            if (year_age > 0 && day_age < 91) {
                yearFine = car.fine365plus * year_age;
                daysFine = car.fine90;
                total = total + (car.fine365plus * year_age) + (car.fine90);
                //total = "Tickets for more than 1 Year are Rs." + total;
            } else if (year_age > 0 && day_age < 366) {
                yearFine = car.fine365plus * year_age;
                daysFine = car.fine365;
                total = total + (car.fine365plus * year_age) + (car.fine365);
                //total = "Tickets for more than 1 Year are Rs." + total;
            } else {
                if (day_age < 31) {
                    //total = "Tickets within 30 days are Rs. " + total;
                } else if (day_age > 30 && day_age < 91) {
                    daysFine = car.fine90;
                    total = total + car.fine90;
                    //total = "Tickets for less than 90 days are Rs." + total;
                } else if (day_age > 90 && day_age < 366) {
                    daysFine = car.fine365;
                    total = total + car.fine365;
                    //total = "Tickets for more than 90 days are Rs." + total;
                }
            }
            break;
        case "M/Cycle+Car":
            renewalFeee = mcyclecar.renewalFee;
            duplicateFeee = mcyclecar.duplicateFee;
            total = mcyclecar.renewalFee + mcyclecar.fine30;
            if (year_age > 0 && day_age < 91) {
                yearFine = mcyclecar.fine365plus * year_age;
                daysFine = mcyclecar.fine90;
                total = total + (mcyclecar.fine365plus * year_age) + (mcyclecar.fine90);
                //total = "Tickets for more than 1 Year are Rs." + total;
            } else if (year_age > 0 && day_age < 366) {
                yearFine = mcyclecar.fine365plus * year_age;
                daysFine = mcyclecar.fine365;
                total = total + (mcyclecar.fine365plus * year_age) + (mcyclecar.fine365);
                //total = "Tickets for more than 1 Year are Rs." + total;
            } else {
                if (day_age < 31) {
                    //total = "Tickets within 30 days are Rs. " + total;
                } else if (day_age > 30 && day_age < 91) {
                    daysFine = mcyclecar.fine90;
                    total = total + mcyclecar.fine90;
                    //total = "Tickets for less than 90 days are Rs." + total;
                } else if (day_age > 90 && day_age < 366) {
                    daysFine = mcyclecar.fine365;
                    total = total + mcyclecar.fine365;
                    //total = "Tickets for more than 90 days are Rs." + total;
                }
            }
            break;
        case "Tractor Agriculture":
            renewalFeee = tractoragri.renewalFee;
            duplicateFeee = tractoragri.duplicateFee;
            total = tractoragri.renewalFee + tractoragri.fine30;
            if (year_age > 0 && day_age < 91) {
                yearFine = tractoragri.fine365plus * year_age;
                daysFine = tractoragri.fine90;
                total = total + (tractoragri.fine365plus * year_age) + (tractoragri.fine90);
                //total = "Tickets for more than 1 Year are Rs." + total;
            } else if (year_age > 0 && day_age < 366) {
                yearFine = tractoragri.fine365plus * year_age;
                daysFine = tractoragri.fine365;
                total = total + (tractoragri.fine365plus * year_age) + (tractoragri.fine365);
                //total = "Tickets for more than 1 Year are Rs." + total;
            } else {
                if (day_age < 31) {
                    //total = "Tickets within 30 days are Rs. " + total;
                } else if (day_age > 30 && day_age < 91) {
                    daysFine = tractoragri.fine90;
                    total = total + tractoragri.fine90;
                    //total = "Tickets for less than 90 days are Rs." + total;
                } else if (day_age > 90 && day_age < 366) {
                    daysFine = tractoragri.fine365;
                    total = total + tractoragri.fine365;
                    //total = "Tickets for more than 90 days are Rs." + total;
                }
            }
            break;
            renewalFeee = mcyclecartractoragri.renewalFee;
        case "M/Cycle+Car+Tractor Agriculture":
            renewalFeee = mcyclecartractoragri.renewalFee;
            duplicateFeee = mcyclecartractoragri.duplicateFee;
            total = mcyclecartractoragri.renewalFee + mcyclecartractoragri.fine30;
            if (year_age > 0 && day_age < 91) {
                yearFine = mcyclecartractoragri.fine365plus * year_age;
                daysFine = mcyclecartractoragri.fine90;
                total = total + (mcyclecartractoragri.fine365plus * year_age) + (mcyclecartractoragri.fine90);
                //total = "Tickets for more than 1 Year are Rs." + total;
            } else if (year_age > 0 && day_age < 366) {
                yearFine = mcyclecartractoragri.fine365plus * year_age;
                daysFine = mcyclecartractoragri.fine365;
                total = total + (mcyclecartractoragri.fine365plus * year_age) + (mcyclecartractoragri.fine365);
                //total = "Tickets for more than 1 Year are Rs." + total;
            } else {
                if (day_age < 31) {
                    //total = "Tickets within 30 days are Rs. " + total;
                } else if (day_age > 30 && day_age < 91) {
                    daysFine = mcyclecartractoragri.fine90;
                    total = total + mcyclecartractoragri.fine90;
                    //total = "Tickets for less than 90 days are Rs." + total;
                } else if (day_age > 90 && day_age < 366) {
                    daysFine = mcyclecartractoragri.fine365;
                    total = total + mcyclecartractoragri.fine365;
                    //total = "Tickets for more than 90 days are Rs." + total;
                }
            }
            break;
        case "LTV":
            renewalFeee = ltv.renewalFee;
            duplicateFeee = ltv.duplicateFee;
            total = ltv.renewalFee + ltv.fine30;
            if (year_age > 0 && day_age < 91) {
                yearFine = ltv.fine365plus * year_age;
                daysFine = ltv.fine90;
                total = total + (ltv.fine365plus * year_age) + (ltv.fine90);
                //total = "Tickets for more than 1 Year are Rs." + total;
            } else if (year_age > 0 && day_age < 366) {
                yearFine = ltv.fine365plus * year_age;
                daysFine = ltv.fine365;
                total = total + (ltv.fine365plus * year_age) + (ltv.fine365);
                //total = "Tickets for more than 1 Year are Rs." + total;
            } else {
                if (day_age < 31) {
                    //total = "Tickets within 30 days are Rs. " + total;
                } else if (day_age > 30 && day_age < 91) {
                    daysFine = ltv.fine90;
                    total = total + ltv.fine90;
                    //total = "Tickets for less than 90 days are Rs." + total;
                } else if (day_age > 90 && day_age < 366) {
                    daysFine = ltv.fine365;
                    total = total + ltv.fine365;
                    //total = "Tickets for more than 90 days are Rs." + total;
                }
            }
            break;
        case "M/Cycle+LTV":
            renewalFeee = mcycleltv.renewalFee;
            duplicateFeee = mcycleltv.duplicateFee;
            total = mcycleltv.renewalFee + mcycleltv.fine30;
            if (year_age > 0 && day_age < 91) {
                yearFine = mcycleltv.fine365plus * year_age;
                daysFine = mcycleltv.fine90;
                total = total + (mcycleltv.fine365plus * year_age) + (mcycleltv.fine90);
                //total = "Tickets for more than 1 Year are Rs." + total;
            } else if (year_age > 0 && day_age < 366) {
                yearFine = mcycleltv.fine365plus * year_age;
                daysFine = mcycleltv.fine365;
                total = total + (mcycleltv.fine365plus * year_age) + (mcycleltv.fine365);
                //total = "Tickets for more than 1 Year are Rs." + total;
            } else {
                if (day_age < 31) {
                    //total = "Tickets within 30 days are Rs. " + total;
                } else if (day_age > 30 && day_age < 91) {
                    daysFine = mcycleltv.fine90;
                    total = total + mcycleltv.fine90;
                    //total = "Tickets for less than 90 days are Rs." + total;
                } else if (day_age > 90 && day_age < 366) {
                    daysFine = mcycleltv.fine365;
                    total = total + mcycleltv.fine365;
                    //total = "Tickets for more than 90 days are Rs." + total;
                }
            }
            break;
        case "M/Cycle+LTV+Tractor Commercial":
            renewalFeee = mcycleltvtractorcommercial.renewalFee;
            duplicateFeee = mcycleltvtractorcommercial.duplicateFee;
            total = mcycleltvtractorcommercial.renewalFee + mcycleltvtractorcommercial.fine30;
            if (year_age > 0 && day_age < 91) {
                yearFine = mcycleltvtractorcommercial.fine365plus * year_age;
                daysFine = mcycleltvtractorcommercial.fine90;
                total = total + (mcycleltvtractorcommercial.fine365plus * year_age) + (mcycleltvtractorcommercial.fine90);
                //total = "Tickets for more than 1 Year are Rs." + total;
            } else if (year_age > 0 && day_age < 366) {
                yearFine = mcycleltvtractorcommercial.fine365plus * year_age;
                daysFine = mcycleltvtractorcommercial.fine365;
                total = total + (mcycleltvtractorcommercial.fine365plus * year_age) + (mcycleltvtractorcommercial.fine365);
                //total = "Tickets for more than 1 Year are Rs." + total;
            } else {
                if (day_age < 31) {
                    //total = "Tickets within 30 days are Rs. " + total;
                } else if (day_age > 30 && day_age < 91) {
                    daysFine = mcycleltvtractorcommercial.fine90;
                    total = total + mcycleltvtractorcommercial.fine90;
                    //total = "Tickets for less than 90 days are Rs." + total;
                } else if (day_age > 90 && day_age < 366) {
                    daysFine = mcycleltvtractorcommercial.fine365;
                    total = total + mcycleltvtractorcommercial.fine365;
                    //total = "Tickets for more than 90 days are Rs." + total;
                }
            }
            break;
        case "HTV":
            renewalFeee = htv.renewalFee;
            duplicateFeee = htv.duplicateFee;
            total = htv.renewalFee + htv.fine30;
            if (year_age > 0 && day_age < 91) {
                yearFine = htv.fine365plus * year_age;
                daysFine = htv.fine90;
                total = total + (htv.fine365plus * year_age) + (htv.fine90);
                //total = "Tickets for more than 1 Year are Rs." + total;
            } else if (year_age > 0 && day_age < 366) {
                yearFine = htv.fine365plus * year_age;
                daysFine = htv.fine365;
                total = total + (htv.fine365plus * year_age) + (htv.fine365);
                //total = "Tickets for more than 1 Year are Rs." + total;
            } else {
                if (day_age < 31) {
                    //total = "Tickets within 30 days are Rs. " + total;
                } else if (day_age > 30 && day_age < 91) {
                    daysFine = htv.fine90;
                    total = total + htv.fine90;
                    //total = "Tickets for less than 90 days are Rs." + total;
                } else if (day_age > 90 && day_age < 366) {
                    daysFine = htv.fine365;
                    total = total + htv.fine365;
                    //total = "Tickets for more than 90 days are Rs." + total;
                }
            }
            break;
        case "HTV(Psv)":
            renewalFeee = htvpsv.renewalFee;
            duplicateFeee = htvpsv.duplicateFee;
            total = htvpsv.renewalFee + htvpsv.fine30;
            if (year_age > 0 && day_age < 91) {
                yearFine = htvpsv.fine365plus * year_age;
                daysFine = htvpsv.fine90;
                total = total + (htvpsv.fine365plus * year_age) + (htvpsv.fine90);
                //total = "Tickets for more than 1 Year are Rs." + total;
            } else if (year_age > 0 && day_age < 366) {
                yearFine = htvpsv.fine365plus * year_age;
                daysFine = htvpsv.fine365;
                total = total + (htvpsv.fine365plus * year_age) + (htvpsv.fine365);
                //total = "Tickets for more than 1 Year are Rs." + total;
            } else {
                if (day_age < 31) {
                    //total = "Tickets within 30 days are Rs. " + total;
                } else if (day_age > 30 && day_age < 91) {
                    daysFine = htvpsv.fine90;
                    total = total + htvpsv.fine90;
                    //total = "Tickets for less than 90 days are Rs." + total;
                } else if (day_age > 90 && day_age < 366) {
                    daysFine = htvpsv.fine365;
                    total = total + htvpsv.fine365;
                    //total = "Tickets for more than 90 days are Rs." + total;
                }
            }
            break;
        case "LTV(Psv)":
            renewalFeee = ltvpsv.renewalFee;
            duplicateFeee = ltvpsv.duplicateFee;
            total = ltvpsv.renewalFee + ltvpsv.fine30;
            if (year_age > 0 && day_age < 91) {
                yearFine = ltvpsv.fine365plus * year_age;
                daysFine = ltvpsv.fine90;
                total = total + (ltvpsv.fine365plus * year_age) + (ltvpsv.fine90);
                //total = "Tickets for more than 1 Year are Rs." + total;
            } else if (year_age > 0 && day_age < 366) {
                yearFine = ltvpsv.fine365plus * year_age;
                daysFine = ltvpsv.fine365;
                total = total + (ltvpsv.fine365plus * year_age) + (ltvpsv.fine365);
                //total = "Tickets for more than 1 Year are Rs." + total;
            } else {
                if (day_age < 31) {
                    //total = "Tickets within 30 days are Rs. " + total;
                } else if (day_age > 30 && day_age < 91) {
                    daysFine = ltvpsv.fine90;
                    total = total + ltvpsv.fine90;
                    //total = "Tickets for less than 90 days are Rs." + total;
                } else if (day_age > 90 && day_age < 366) {
                    daysFine = ltvpsv.fine365;
                    total = total + ltvpsv.fine365;
                    //total = "Tickets for more than 90 days are Rs." + total;
                }
            }
            break;
        case "Rikshaw":
            renewalFeee = rickshaw.renewalFee;
            duplicateFeee = rickshaw.duplicateFee;
            total = rickshaw.renewalFee + rickshaw.fine30;
            if (year_age > 0 && day_age < 91) {
                yearFine = rickshaw.fine365plus * year_age;
                daysFine = rickshaw.fine90;
                total = total + (rickshaw.fine365plus * year_age) + (rickshaw.fine90);
                //total = "Tickets for more than 1 Year are Rs." + total;
            } else if (year_age > 0 && day_age < 366) {
                yearFine = rickshaw.fine365plus * year_age;
                daysFine = rickshaw.fine365;
                total = total + (rickshaw.fine365plus * year_age) + (rickshaw.fine365);
                //total = "Tickets for more than 1 Year are Rs." + total;
            } else {
                if (day_age < 31) {
                    //total = "Tickets within 30 days are Rs. " + total;
                } else if (day_age > 30 && day_age < 91) {
                    daysFine = rickshaw.fine90;
                    total = total + rickshaw.fine90;
                    //total = "Tickets for less than 90 days are Rs." + total;
                } else if (day_age > 90 && day_age < 366) {
                    daysFine = rickshaw.fine365;
                    total = total + rickshaw.fine365;
                    //total = "Tickets for more than 90 days are Rs." + total;
                }
            }
            break;
        case "M/Cycle+Rikshaw":
            renewalFeee = mcyclerickshaw.renewalFee;
            duplicateFeee = mcyclerickshaw.duplicateFee;
            total = mcyclerickshaw.renewalFee + mcyclerickshaw.fine30;
            if (year_age > 0 && day_age < 91) {
                yearFine = mcyclerickshaw.fine365plus * year_age;
                daysFine = mcyclerickshaw.fine90;
                total = total + (mcyclerickshaw.fine365plus * year_age) + (mcyclerickshaw.fine90);
                //total = "Tickets for more than 1 Year are Rs." + total;
            } else if (year_age > 0 && day_age < 366) {
                yearFine = mcyclerickshaw.fine365plus * year_age;
                daysFine = mcyclerickshaw.fine365;
                total = total + (mcyclerickshaw.fine365plus * year_age) + (mcyclerickshaw.fine365);
                //total = "Tickets for more than 1 Year are Rs." + total;
            } else {
                if (day_age < 31) {
                    //total = "Tickets within 30 days are Rs. " + total;
                } else if (day_age > 30 && day_age < 91) {
                    daysFine = mcyclerickshaw.fine90;
                    total = total + mcyclerickshaw.fine90;
                    //total = "Tickets for less than 90 days are Rs." + total;
                } else if (day_age > 90 && day_age < 366) {
                    daysFine = mcyclerickshaw.fine365;
                    total = total + mcyclerickshaw.fine365;
                    //total = "Tickets for more than 90 days are Rs." + total;
                }
            }
            break;
        case "Invalid Carriage":
            renewalFeee = invalidcarriage.renewalFee;
            duplicateFeee = invalidcarriage.duplicateFee;
            total = invalidcarriage.renewalFee + invalidcarriage.fine30;
            if (year_age > 0 && day_age < 91) {
                yearFine = invalidcarriage.fine365plus * year_age;
                daysFine = invalidcarriage.fine90;
                total = total + (invalidcarriage.fine365plus * year_age) + (invalidcarriage.fine90);
                //total = "Tickets for more than 1 Year are Rs." + total;
            } else if (year_age > 0 && day_age < 366) {
                yearFine = invalidcarriage.fine365plus * year_age;
                daysFine = invalidcarriage.fine365;
                total = total + (invalidcarriage.fine365plus * year_age) + (invalidcarriage.fine365);
                //total = "Tickets for more than 1 Year are Rs." + total;
            } else {
                if (day_age < 31) {
                    //total = "Tickets within 30 days are Rs. " + total;
                } else if (day_age > 30 && day_age < 91) {
                    daysFine = invalidcarriage.fine90;
                    total = total + invalidcarriage.fine90;
                    //total = "Tickets for less than 90 days are Rs." + total;
                } else if (day_age > 90 && day_age < 366) {
                    daysFine = invalidcarriage.fine365;
                    total = total + invalidcarriage.fine365;
                    //total = "Tickets for more than 90 days are Rs." + total;
                }
            }
            break;
        default:
            text = "Select Expiry Date";
    }

    if (isNaN(year_age) || isNaN(day_age)) {
        document.getElementById('result').innerHTML = "Select Expiry Date";
        console.log("Invalid Date - Please try again!");
    } else {

        durationValue = "<span>" + year_age + " Years + " + day_age + " Days</span>";
        durationFineValue = yearFine + " + " + daysFine;
        totalCharges = total + duplicateFeee + courierFee;

        //document.getElementById('result').innerHTML = "Category : " + category + "</br>" + "<br/>License is " + year_age + " years     " + day_age + " days old." + total + "</br><span style='color: blue'><b>Note:</b> Rs. 180/- are Courier charges.</br> + </br> In case of duplicate Additional License Tickets of Rs. 150/-. </span>";
        document.getElementById('result').innerHTML = "<h3>Tickets Charges Details</h3><table style='border: 1px solid' id='ticketTable'><tr><td id='category'>Category</td><th id='category-value' colspan='2'>" + category + "</th></tr><tr><td id='duration'>Duration</td><th id='duration-value'>" + year_age + " Year(s)</th><th>" + day_age + " Day(s) </th></tr><tr><td id='duration-fine'>Duration Fine</td><th id='duration-fine-value'>" + yearFine + " Rs</th><th>" + daysFine + " Rs</th></tr><tr><td id='renewal-fee'>Renewal Tickets Fee</td><th id='renewal-fee-value' colspan='2'>" + renewalFeee + " Rs</th></tr><tr id='totalTickets'><td id='total-tickets'>Total Tickets Fee</td><th id='total-tickets-value' colspan='2'>" + total + " Rs</th></tr><tr><th colspan='3'>Additional Charges</th></tr><tr><td id='courier-fee'>Courier Fee</td><th id='courier-fee-value' colspan='2'>" + courierFee + " Rs</th></tr><tr id='dup-row'><td id='duplicate-fee'>Duplicate License Tickets Fee</td><th id='duplicate-fee-value' colspan='2'>" + duplicateFeee + " Rs</th></tr><tr id='totalCharges'><td id='total-charges'>Total Charges *</td><th id='total-charges-value' colspan='2'>" + totalCharges + " Rs</th></tr><tr id='note'><td colspan='3'><span style='color: blue'><b>*.</b> Total Charges including Duplicate and Courier Fee </span></td></tr></table>"

    }

}

function fee(duplicateFee, renewalFee, fine30, fine90, fine365, fine365plus) {
    return {

        duplicateFee: duplicateFee,
        renewalFee: renewalFee,
        fine30: fine30,
        fine90: fine90,
        fine365: fine365,
        fine365plus: fine365plus
    };

}

let mcycle = fee(100, 500, 0, 50, 100, 250);
let car = fee(150, 750, 0, 75, 150, 375);
let mcyclecar = fee(150, 750, 0, 75, 150, 375);
let tractoragri = fee(50, 250, 0, 25, 50, 250);
let mcyclecartractoragri = fee(150, 750, 0, 75, 150, 375);
let tractorcommercial = fee(100, 500, 0, 50, 100, 250);
let ltv = fee(150, 750, 0, 75, 150, 375);
let mcycleltv = fee(150, 750, 0, 75, 150, 375);
let mcycleltvtractorcommercial = fee(150, 750, 0, 75, 150, 375);
let htv = fee(200, 1000, 0, 100, 200, 500);
let htvpsv = fee(200, 1000, 0, 100, 200, 500);
let ltvpsv = fee(150, 750, 0, 75, 150, 375);
let rickshaw = fee(100, 500, 0, 50, 100, 250);
let mcyclerickshaw = fee(100, 500, 0, 50, 100, 250);
let invalidcarriage = fee(150, 100, 0, 50, 100, 250);
//alert(mcycle.testFee); // John
//alert(car.testFee); // John

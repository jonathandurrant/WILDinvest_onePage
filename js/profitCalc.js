var nyala_whl_fem = 22000;
var Nyala_whl_m = 12000; 
var Nyala__ret_fem = 25000;
var Sable__ret_fem = 300000;
var Sable__whl_fem = Sable__ret_fem * 0.93;
var Sable_whl_m = 40000;
var tag_cost = 1000;
var saleComA = 0.04;
var saleComB = 0.02;
var saleComProfit = 0.01;
var overhead_cost_yr = 1267.25;
var Cost_food_perYear_perAnimal = 2894.45; 
var fertility = 0.90;
var highReturn = true; 
// the relative ratio of how much a baby eats compared to an adult.
var babyFood_multiplier = 0.5;
var Herd_initial;
var Animal;

var adultFem = [];
var baby = [];
var babyMa = []; 
var babyFem = []; 
var sellFem = [];
var overhead = [];
var maleDiv = [];
var SalesPay = [];
var clientPay = [];

var fNum  = function (num) {
    var n = num.toString(), p = n.indexOf('.');
    return n.replace(/\d(?=(?:\d{3})+(?:\.|$))/g, function ($0, i) {
        return p < 0 || i < p ? ($0 + ' ') : $0;
    });
}   
function animal(x) {
    if (x < 600000) {
        Animal = "nyala";
        femRet = Nyala__ret_fem;
        maleWhl = Nyala_whl_m;
        femWhl = nyala_whl_fem;
    } else {
        Animal = "sable";
        femRet = Sable__ret_fem;
        maleWhl = Sable_whl_m;
        femWhl = Sable__whl_fem;
    }
} 
function overheadFnc(adultFem, babyFem) {
    return Math.round((adultFem + (babyFem * babyFood_multiplier)) * (Cost_food_perYear_perAnimal + overhead_cost_yr));
}
function investment() {
    if (invest < 156000) {
        var perc = Math.round((invest / 156000) * 100);
        $("#x").text(fNum(invest));
        $(".y").text(perc + "%");
        $("#investMinimum_modal").modal();
        invest = 156000;
    } 
}
function money(babyM, overH, i) {
    maleDiv[i] = babyM * maleWhl;
    if (overH > maleDiv[i]) {
        sellFem[i] = Math.ceil((overH - maleDiv[i]) / femWhl); 
    } else {
        sellFem[i] = 0;
    }
    if (i === 1) {
        if (highReturn) {
            clientPay[i] = ((sellFem[i] * femWhl) + maleDiv[i] - overH) / 2 + (femWhl * Herd_initial);
        } else {
            clientPay[i] = ((sellFem[i] * femWhl) + maleDiv[i] - overH) / 2;
        }
    } else if (i === 4) {
        clientPay[i] = (adultFem[i] * femWhl + maleDiv[i] - overH) / 2;
    } else {
        clientPay[i] = ((sellFem[i] * femWhl) + maleDiv[i] - overH) / 2; 
    }
}
function generation0() {
    adultFem[0] =  Herd_initial;
    baby[0] = adultFem[0];
    babyFem[0] = Math.ceil(baby[0] * 0.5);
    babyMa[0] = baby[0] - babyFem[0];
    overhead[0] = overheadFnc(adultFem[0], babyFem[0]);
    money(babyMa[0], overhead[0], 0);
}
function generation1() {
    if (highReturn) {
        adultFem[1] = adultFem[0] + babyFem[0] - sellFem[0];
    } else {
        adultFem[1] = babyFem[0] - sellFem[0];
    }
    baby[1] = adultFem[1] * fertility;
    babyFem[1] = Math.ceil(baby[1] * 0.5);
    babyMa[1] = baby[1] - babyFem[1];
    overhead[1] = overheadFnc(adultFem[1], babyFem[1]);
    money(babyMa[1], overhead[1], 1);
}
function generation2_4(i) {
    adultFem[i] = adultFem[i-1] + babyFem[i-1] - sellFem[i-1];
    baby[i] = adultFem[i];
    babyFem[i] = Math.ceil(baby[i] * 0.5);
    babyMa[i] = baby[i] - babyFem[i];
    overhead[i] = overheadFnc(adultFem[i], babyFem[i]);
    money(babyMa[i], overhead[i], i);
}
function generation5(i) {
    adultFem[i] = babyFem[i-1];
    baby[i] = 0;
    babyFem[i] = 0;
    babyMa[i] = 0;
    overhead[i] = overheadFnc(adultFem[i], babyFem[i]);
    clientPay[i] = (adultFem[i] - overhead[i]) / 2;
}
function generations() {
    for (var i = 0; 1 < 6; ++i) {
        if (i == 0) {
            generation0();
        } else if (i == 1) {
            generation1();
        } else if (i < 4) {
            generation2_4(i);
        } else {
            generation5(i);
        }
    }
}
function profitCalc() {
    invest = $("#investment").val();
    investment();
    animal(invest);
    var Herd_initial = Math.round(invest / (femRet  + tag_cost));
    var Investment_initial = Herd_initial * (femRet + tag_cost);
    $("#investAmount").text("R " + fNum(Investment_initial) + " (minimum)");
    $("#animalAmount").text(Herd_initial + " pregnant " + Animal);
    generations();
    if (Investment_initial <= 1000000) {
        var commission = Investment_initial * saleComA;
    } else {
        var commission = (1000000 * saleComA) + (saleComB * (Investment_initial - 1000000));
    }
    console.log(adultFem);
    console.log(baby);
    console.log(babyFem);
}

let formula = (salary, years, max, min, maxInterest, minInterest, minSalary) => {
    if (salary < (minSalary || 0)) {
        return [0, 0]; 
    }

    let loanAmount = ((max - min) / years * years) + min;
    loanAmount = Math.min(loanAmount, salary * 10 * years*12);

    let interestRate = (((maxInterest - minInterest) / years * years) + minInterest);

    return [
        loanAmount.toFixed(0),
        (interestRate * 100).toFixed(0)
    ];
};

let LoansData = [
    {
        title: "القرض الشخصي",
        p: `المبلغ: يبدأ من IO,OOO جنيه مصري ويصل إلى 9 ملايين جنيه مصري.
مدة السداد: تصل إلى 8 سنوات.
سعر الفائدة: يتراوح بين 26% و36% متناقصة.
التأمين: تأمين على الحياة طوال فترة السداد.
المستندات المطلوبة: اثبات الدخل، بطاقة الرقم القومي، وأية مستندات أخرى يحددها البنك.`,
        max: 2000000,
        min: 10000,
        maxInterest: 0.36,
        minInterest: 0.26,
        years: 8
    },
    {
        title: "قرض السياره",
        p: `المبلغ: يبدأ من 50,000 جنيه مصري.
مدة السداد: تصل إلى 8 سنوات.
سعر الفائدة: يتراوح بين 26% و36% متناقصة.`,
        max: 9000000,
        min: 50000,
        maxInterest: 0.36,
        minInterest: 0.26,
        years: 8
    },
    {
        title: "القرض العقاري",
        p: `لشراء أو تجديد العقارات.
الفائدة: تبدأ من 10% وتصل إلى 25%.
مدة السداد: حتى ٢٠ سنة.`,
        max: 3000000,
        min: 500000,
        maxInterest: 0.25,
        minInterest: 0.10,
        years: 20
    },
    {
        title: "قرض بضمان الشهادات",
        p: `اقتراض مبلغ بضمان شهادة الادخار.
الفائدة: تبدأ من 15% وتصل إلى 25%.
مدة السداد: مرنة حسب الاتفاق.`,
        max: 3000000,
        min: 500000,
        maxInterest: 0.30,
        minInterest: 0.10,
        years: 10
    },
    {
        title: "القرض التعليمي",
        p: `الحد الأقصى للتمويل: يصل إلى 300,000 جنيه مصري.
مدة السداد: تصل إلى 6 سنوات.
الفائدة: 18% متناقصة.
الشروط: الحد الأدنى للراتب 5,000 جنيه، الانطباعية.`,
        max: 300000,
        min: 50000,
        maxInterest: 0.18,
        minInterest: 0.0,
        minSalary: 5000,
        years: 6
    },
    {
        title: "قرض تمويل المشروعات الصغيره و المتوسطه",
        p: `الحد الأدنى للتمويل: 15,000 جنيه مصري.
الحد الأقصى للتمويل: 1.5 مليون جنيه مصري.
مدة السداد: من سنة إلى IO سنوات.
نسبة الفائدة: تبدأ من 17% سنويا على أساس متناقص، وتختلف حسب مدة السداد.`,
        max: 1500000,
        min: 15000,
        maxInterest: 0.25,
        minInterest: 0.17,
        years: 10
    }
];

let cardsContainer = document.getElementsByClassName('cards-container')[0];

for (let i = 0; i < LoansData.length; i++) {
    console.log(LoansData[i].title);
    let card = document.createElement('div');
    card.classList.add('position-relative');
    LoansData[i].p = LoansData[i].p.replace(/\n/g, "<br>");

    let btn = `
        <button type="submit" class="mx-auto d-block submit" id="submit-${i}">
            <i class="fa-solid fa-arrow-left"></i>
        </button>
    `;

    let calc = `
        <div class="calc-container">
            <form class="d-flex justify-content-between align-items-center w-100  flex-row" id="form-${i}">
                <div class=" col-4 h-100">
                    <div>
                        <label for="salary" class="fs-6 fs-md-5 mb-2">مرتبك</label> <br>
                        <input type="number" min="0" id="salary-${i}" class="input">
                    </div>
                    <br>
                    <div>
                        <label for="years" class="fs-6 fs-md-5">عدد السنين</label> <br>
                        <input type="number" min="0" id="years-${i}" class="input fs-6 fs-md-5">
                    </div>
                </div>

                ${btn}

                <!-- output -->
                <div class="col-4 h-100">
                    <div>
                        <label for="loan" class="fs-6 fs-md-5 mb-2">حجم القرض</label> 
                        <br>
                        <span id="loan-${i}" class="input"></span>
                    </div>
                    <br>
                    <div>
                        <label for="intrest" class="fs-6 fs-md-5 mb-2">الفايده</label> 
                        <br>
                        <span id="intrest-${i}" class="input"></span>
                    </div>
                </div>
            </form>
        </div>
    `;

    card.innerHTML = `
        <div class="card flex-row-reverse">
            <div class="card-body h-100 d-flex justify-content-between flex-column">
                <div>
                    <h5 class="card-title">${LoansData[i].title}</h5>
                    <p class="card-text mb-3">${LoansData[i].p}</p>
                </div>
                <div>
                    ${calc}
                    <a class="btn btn-primary">اعرف اكتر</a>
                </div>
            </div>
        </div>
    `;

    cardsContainer.appendChild(card);
}

Array.from(document.getElementsByTagName("form")).forEach((form, ind) => {
    form.addEventListener('submit', function (e) {
        e.preventDefault();
        let formid = form.id.at(-1);
        let salary = parseInt(document.getElementById(`salary-${formid}`).value);
        let years = parseInt(document.getElementById(`years-${formid}`).value);

        let loan = document.getElementById(`loan-${formid}`);
        let intrest = document.getElementById(`intrest-${formid}`);

        if (salary && years && salary > (LoansData[formid].minSalary - 1 || 0) && years > 1 && !(years > LoansData[formid]["years"])) {
            let data = formula(
                salary,
                years,
                LoansData[formid]["max"],
                LoansData[formid]["min"],
                LoansData[formid]["maxInterest"],
                LoansData[formid]["minInterest"],
                LoansData[formid]["minSalary"]
            );

            let loanValue = data[0].toLocaleString();
            let intrestValue = data[1];
            loan.innerText = loanValue;
            intrest.innerText = `${intrestValue}%`;
        } else {
            loan.innerText = "غير مؤهل";
            intrest.innerText = "غير مؤهل";
        }
    });
});
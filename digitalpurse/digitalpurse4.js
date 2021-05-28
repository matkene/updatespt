alert("Hello");

let dt = document.createElement("script");
dt.src = "https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js";
dt.setAttribute("id", "digitalpurse_dt_js");
document.head.appendChild(dt);

// let semanticuiJS = document.createElement("script");
// semanticuiJS.src = "https://cdn.datatables.net/1.10.24/js/dataTables.semanticui.min.js";
// semanticuiJS.setAttribute("id","digitalpurse_semanticui_js");
// document.head.appendChild(semanticuiJS);
//
// let semanticMinJS = document.createElement("script");
// semanticMinJS.src = "https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js";
// semanticMinJS.setAttribute("id","digitalpurse_semanticmin_js");
// document.head.appendChild(semanticMinJS);
//
// let semantic = document.createElement("link");
// semantic.type = "text/css";
// semantic.rel = "stylesheet";
// semantic.href = "https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css"
// document.head.appendChild(semantic);
//
// let semanticui = document.createElement("link");
// semanticui.type = "text/css";
// semanticui.rel = "stylesheet";
// semanticui.href = "https://cdn.datatables.net/1.10.24/css/dataTables.semanticui.min.css"
// document.head.appendChild(semanticui);


let script = document.createElement("script");
const scriptIsLocallyHosted = false;
// script.src = scriptIsLocallyHosted ? "http://localhost/digitalpurse/digitalpurse.js" : "https://kennydigip.herokuapp.com/digitalpurse.js";

script.src = "https://kennydigip.herokuapp.com/digitalpurse.js";
script.setAttribute("id", "digitalpurse_script_js");
document.head.appendChild(script);


if (!window.awaitingFunctions) {
    window.awaitingFunctions = []
}

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

document.addEventListener("digitalpurse_loaded", function () {
    // console.log("Loaded Fired");
    doFunctionExecution();
    initOnclickListeners()
});

async function doFunctionExecution() {
    // console.log("Executing doFunction Execution...");
    const triggerQueue = window.awaitingFunctions;
    if (triggerQueue && window.digitalpurse) {
        runMethodLoop: for (let idigi = 0; idigi < triggerQueue.length; idigi++) {
            const functionData = triggerQueue[idigi];
            const functionName = functionData.functionName;
            // console.log("Executing function", functionName, "with parameters", functionData.functionArgs)
            try {
                if (functionData.widiDigiNameSpace) {
                    if (functionData.functionArgs) {
                        window["digitalpurse"][functionName](triggerQueue[idigi].functionArgs)
                    } else {
                        window["digitalpurse"][functionName](triggerQueue[idigi].functionArgs)
                    }
                } else {
                    if (functionData.functionArgs) {
                        window[functionName](triggerQueue[idigi].functionArgs)
                    } else {
                        window[functionName]()
                    }
                }
                // console.log("Function ", functionName, "Executed successfully")
                window.awaitingFunctions = window.awaitingFunctions.filter(dt => dt.signature !== functionData.signature);
                continue runMethodLoop;
            } catch (err) {
                console.warn("Function", functionName, "is not a valid function", err)
                window.awaitingFunctions = window.awaitingFunctions.filter(dt => dt.signature !== functionData.signature);
                continue runMethodLoop;
            }
        }
    } else {
        await sleep(1000);
        // console.warn("Retrying call Queue");
        doFunctionExecution();
    }
}

function initOnclickListeners() {
    // console.log("Init Listeners Called...");
    $("#id_submitbutton").click(function (e) {
        let submitValue = $(this).val();
        switch (submitValue) {
            case "Enrol me":
                e.preventDefault();
                window.digitalpurse.subscribeToProduct($(this));
                break;
            default:
                // alert("Unknown Submit");
                break;
        }
    });
    let swalContainer = $(".swal2-container");

    setInterval(function () {
        if (swalContainer) {
            $(".swal2-container").css("z-index", "9999999999");
        } else {
            swalContainer = $(".swal2-container");
        }
        // $(".swal2-container").attr("style","overflow-y:auto;z-index:9999999999 !important;");
    }, 1000);
}

function digital_purse_init_user(Y, initializedVariables) {
    window.digitalPurseSessionVariables = initializedVariables;
}

function digital_purse_currentCourseToEnroll(Y, currentCourseToEnrol) {
    window.currentCourseToEnrol = currentCourseToEnrol;
    // console.log("Course Custom Fields: ",window.currentCourseToEnrol)
}

async function digital_purse_checkCourseSubscription(Y, currentCourse) {
    window.currentCourse = currentCourse;
    // console.log("Current Course", window.currentCourse, window.digitalpurse);
    window.validateCourseWaiting = true;
    let subscriptionCheckInterval = setInterval(function () {
        if (window.subscriptionExhausted) {
            clearInterval(subscriptionCheckInterval);
            return;
        }
        window.awaitingFunctions.push({
            functionName: "validateSubscription",
            functionArgs: "", signature: getSignature("tryVC"),
            widiDigiNameSpace: true
        })
        doFunctionExecution();
    }, 3000);
}

function getSignature(functionName) {
    let all = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
    let tempSig = functionName;
    for (let ui = 0; ui < 10; ui++) {
        tempSig += all[Math.floor((Math.random() * all.length))];
    }
    return tempSig;
}
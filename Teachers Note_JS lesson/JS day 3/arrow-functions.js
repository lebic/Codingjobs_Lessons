/**
 * Arrow functions
 *
 * (params) => {}
 */
// original syntax
const func1 = function (params) {
    // instructions
};

// ES6 syntax, shorter but has another consequence
// rebind the outter "this" "context" to the function
// when calling such function, its "this" context will be the one from outside (forget about it for now!)
const func2 = (param1, param2) => {
    // instructions
}
// you can omit the () if there is only one param
const func3 = param => {}

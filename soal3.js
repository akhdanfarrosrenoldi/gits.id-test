function soal3(str) {
  const brackets = str.match(/[()\[\]{}]/g) || [];

  const stack = [];
  const pairs = {
    ")": "(",
    "]": "[",
    "}": "{",
  };

  for (let char of brackets) {
    if (char === "(" || char === "[" || char === "{") {
      stack.push(char);
    } else {
      if (stack.length === 0) return "NO";
      const top = stack.pop();
      if (pairs[char] !== top) {
        return "NO";
      }
    }
  }

  return stack.length === 0 ? "YES" : "NO";
}

console.log(soal3("{ [ ( ) ] }"));
console.log(soal3("{ [ ( ] ) }"));
console.log(soal3("{ ( ( [ ] ) [ ] ) [ ] }"));

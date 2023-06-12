const sum = require('./sum');


test('adds 2 + 3 to equal 5', () => {
  expect(sum(2, 3)).toBe(5);
});

test('adds 5 + 5 to equal 10', () => {
  expect(sum(5, 5)).toBe(10);
});

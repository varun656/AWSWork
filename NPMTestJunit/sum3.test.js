const sum = require('./sum');


test('adds 10 + 10 to equal 20', () => {
  expect(sum(10, 10)).toBe(20);
});

test('adds 50 + 50 to equal 100', () => {
  expect(sum(50, 50)).toBe(100);
});

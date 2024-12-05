# Roman Numeral Converter Kata

Welcome to the **Roman Numeral Converter Kata**, a code kata project built with PHP and PHPUnit. This project is designed to help developers practice and refine their programming skills by working through challenges related to converting Arabic numbers into Roman numerals.

## Overview

In this code kata, we will design and implement a system to convert Arabic numbers (standard modern numbers, e.g., `1, 2, 3`) into their Roman numeral equivalents.

### The Goal of the First Kata

The focus of the first installament of this kata is to convert Arabic numbers into Roman numerals based on the **classic Standard Roman numeral system**, which represents individual decimal places as follows:

#### Roman Numeral Chart

|   | **Thousands** | **Hundreds** | **Tens** | **Units* |
|---|---------------|--------------|----------|----------|
| 1 | M             | C            | X        | I        |
| 2 | MM            | CC           | XX       | II       |
| 3 | MMM           | CCC          | XXX      | III      |
| 4 |               | CD           | XL       | IV       |
| 5 |               | D            | L        | V        |
| 6 |               | DC           | LX       | VI       |
| 7 |               | DCC          | LXX      | VII      |
| 8 |               | DCCC         | LXXX     | VIII     |
| 9 |               | CM           | XC       | IX       |

**Examples:**
- `3` → `III`
- `14` → `XIV`
- `99` → `XCIX`
- `1987` → `MCMLXXXVII`

This kata uses PHPUnit for its test cases to confirm the correctness of your implementation.

---

## Future Katas

In future iterations, the following challenges may be introduced:
- Handling invalid input.
- Converting Roman numerals back to Arabic numbers.
- Alternative Roman numeral systems (e.g., subtractive notation).
- Edge cases and performance optimizations for large numbers.

For now, we will focus purely on **converting valid Arabic numbers to Roman numerals** in the classic system.

---

## Requirements

- **Programming Language:** PHP
- **Testing Library:** [PHPUnit](https://phpunit.de/)

### Prerequisites

Before running or developing this project, ensure you have the following installed:
- Docker Compose

---

## Getting Started

Follow these steps to set up and run the project on your local machine:

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd roman-numeral-kata
   ```

2. **Install project dependencies using Composer**
   ```bash
   docker compose run -it php install
   ```

3. **Run the PHPUnit Test Suite**
   ```bash
   docker compose run -it php test
   ```

---

## Usage

To implement the conversion logic,
navigate to the `app/` directory and create the necessary service, utility, or helper classes.
Test cases are already defined under the `tests/` directory.
Make sure to pass all test cases before proceeding to more advanced challenges.

---

## Project Structure

```
roman-numeral-kata/
├── app/                 # Main application directory
├── tests/               # PHPUnit test cases
├── composer.json        # Composer dependencies
├── docker-compose.yml   # A standard way to run the test
└── README.md            # Project documentation
```

---

Happy coding! 🚀
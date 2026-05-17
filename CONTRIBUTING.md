# Contributing to De-AI

First off, thank you for considering contributing to De-AI! It's people like you that make De-AI such a great tool.

## Code of Conduct

This project and everyone participating in it is governed by our Code of Conduct. By participating, you are expected to uphold this code.

## How Can I Contribute?

### Reporting Bugs

Before creating bug reports, please check the issue list as you might find out that you don't need to create one. When you are creating a bug report, please include as many details as possible:

* **Use a clear and descriptive title**
* **Describe the exact steps which reproduce the problem**
* **Provide specific examples to demonstrate the steps**
* **Describe the behavior you observed after following the steps**
* **Explain which behavior you expected to see instead and why**
* **Include screenshots and animated GIFs if possible**

### Suggesting Enhancements

Enhancement suggestions are tracked as GitHub issues. When creating an enhancement suggestion, please include:

* **Use a clear and descriptive title**
* **Provide a step-by-step description of the suggested enhancement**
* **Provide specific examples to demonstrate the steps**
* **Describe the current behavior and expected behavior**
* **Explain why this enhancement would be useful**

### Pull Requests

* Fill in the required template
* Follow the Python styleguide
* Include appropriate test cases
* End all files with a newline
* Avoid platform-dependent code

## Styleguides

### Git Commit Messages

* Use the present tense ("Add feature" not "Added feature")
* Use the imperative mood ("Move cursor to..." not "Moves cursor to...")
* Limit the first line to 72 characters or less
* Reference issues and pull requests liberally after the first line

Format:
```
[type]: [subject]

[body]

[footer]
```

Types: feat, fix, docs, style, refactor, perf, test, chore

Example:
```
feat: add code complexity analysis

Implements cyclomatic complexity calculation for better
code analysis. Adds new metrics to detection model.

Closes #123
```

### Python Styleguide

* Follow [PEP 8](https://www.python.org/dev/peps/pep-0008/)
* Use 4 spaces for indentation
* Use meaningful variable and function names
* Add docstrings to all functions and classes
* Keep lines under 100 characters when possible

Example:
```python
def analyze_code_complexity(code_snippet: str) -> dict:
    """
    Analyze the complexity metrics of the given code snippet.
    
    Args:
        code_snippet (str): The code to analyze
        
    Returns:
        dict: Dictionary containing complexity metrics
    """
    pass
```

### Jupyter Notebook Style

* Keep notebooks clean and well-organized
* Use markdown cells for documentation
* Add descriptive comments in code cells
* Clear outputs before committing
* Use meaningful variable names

## Development Setup

1. Fork the repo and clone your fork
2. Create a virtual environment:
   ```bash
   python -m venv venv
   source venv/bin/activate
   ```
3. Install development dependencies:
   ```bash
   pip install -r requirements.txt
   pip install -r requirements-dev.txt
   ```
4. Create a branch for your changes:
   ```bash
   git checkout -b feature/your-feature-name
   ```
5. Make your changes and commit them
6. Push to your fork and submit a pull request

## Testing

* Write tests for new features
* Ensure all tests pass before submitting a PR
* Run tests with:
  ```bash
  pytest tests/
  ```

## Additional Notes

### Issue and Pull Request Labels

* `bug` - Something isn't working
* `enhancement` - New feature or request
* `documentation` - Improvements or additions to documentation
* `good first issue` - Good for newcomers
* `help wanted` - Extra attention is needed
* `question` - Further information is requested
* `wontfix` - This will not be worked on

## Recognition

Contributors will be recognized in:
* The README.md file
* Release notes

Thank you for contributing! 🎉

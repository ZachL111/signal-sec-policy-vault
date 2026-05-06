# Signal Sec Policy Vault Walkthrough

I use this file as a small checklist before changing the PHP implementation.

| Case | Focus | Score | Lane |
| --- | --- | ---: | --- |
| baseline | trust boundary | 132 | watch |
| stress | claim drift | 223 | ship |
| edge | replay exposure | 155 | ship |
| recovery | policy width | 202 | ship |
| stale | trust boundary | 182 | ship |

Start with `stress` and `baseline`. They create the widest contrast in this repository's fixture set, which makes them better review anchors than the middle cases.

The next useful expansion would be a malformed fixture around claim drift and policy width.

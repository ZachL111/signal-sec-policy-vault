# Review Journal

The review surface for `signal-sec-policy-vault` is deliberately narrow: one fixture, one scoring rule, and one local check.

The local checks classify each case as `ship`, `watch`, or `hold`. That gives the project a small review vocabulary that matches its security tooling focus without claiming live deployment or external usage.

## Cases

- `baseline`: `trust boundary`, score 132, lane `watch`
- `stress`: `claim drift`, score 223, lane `ship`
- `edge`: `replay exposure`, score 155, lane `ship`
- `recovery`: `policy width`, score 202, lane `ship`
- `stale`: `trust boundary`, score 182, lane `ship`

## Note

This file is intentionally plain so the fixture remains the source of truth.

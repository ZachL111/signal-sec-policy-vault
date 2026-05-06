# signal-sec-policy-vault

`signal-sec-policy-vault` keeps a focused PHP implementation around security tooling. The project goal is to implement a PHP security tooling project for policy event replay, using fixture event logs and golden state snapshots.

## Purpose

This is intentionally local and self-contained so it can be inspected without credentials, services, or seeded history.

## Signal Sec Policy Vault Review Notes

Start with `claim drift` and `trust boundary`. Those cases create the widest score spread in this repo, so they are the best quick check when the model changes.

## What Is Covered

- `fixtures/domain_review.csv` adds cases for trust boundary and claim drift.
- `metadata/domain-review.json` records the same cases in structured form.
- `config/review-profile.json` captures the read order and the two review questions.
- `examples/signal-sec-policy-walkthrough.md` walks through the case spread.
- The PHP code includes a review path for `claim drift` and `trust boundary`.
- `docs/field-notes.md` explains the strongest and weakest cases.

## Implementation Notes

The implementation keeps the scoring rule plain: reward signal and confidence, preserve slack, penalize drag, then classify the result into a review lane.

The added PHP path is deliberately direct, with fixtures doing most of the explaining.

## Command

```powershell
powershell -NoProfile -ExecutionPolicy Bypass -File scripts/verify.ps1
```

## Audit Path

That command is also the regression path. It verifies the domain cases and catches mismatches between the CSV, metadata, and code.

## Limits

The repository is intentionally scoped to local checks. I would expand it by adding adversarial fixtures before adding features.

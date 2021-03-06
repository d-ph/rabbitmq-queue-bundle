# Change Log
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).

## [Unreleased]

## [2.2.0] - 2017-01-27
### Changed
- Log `QueueFatalErrorException`'s child exception in the database if `QueueFatalErrorException` was thrown with a child exception.

## [2.1.0] - 2017-01-27
### Added
- [Minor breaking change] Add required `rabbitmq-queue-bundle.queue_names_prefix` configuration item.

## [2.0.0] - 2017-01-23
### Changed
- [Breaking change] Use exchange-less way of using producers and consumers

[Unreleased]: https://github.com/printedcom/rabbitmq-queue-bundle/compare/2.2.0...HEAD
[2.2.0]: https://github.com/printedcom/rabbitmq-queue-bundle/compare/2.1.0...2.2.0
[2.1.0]: https://github.com/printedcom/rabbitmq-queue-bundle/compare/2.0.0...2.1.0
[2.0.0]: https://github.com/printedcom/rabbitmq-queue-bundle/compare/1.0.0...2.0.0
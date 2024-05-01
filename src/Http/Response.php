<?php

namespace Quagga\Contracts\Http;

use Psr\Http\Message\ResponseInterface;
use Symfony\Component\HttpFoundation\Request;

interface Response extends ResponseInterface
{
    public static function create(?string $content = '', int $status = 200, array $headers = []);

    public function prepare(Request $request);

    public function sendHeaders();

    public function sendContent();

    public function send();

    public function setContent(?string $content);

    public function getContent();

    public function setProtocolVersion(string $version): object;

    public function getProtocolVersion(): string;

    public function setStatusCode(int $code, ?string $text = null): object;

    public function getStatusCode(): int;

    public function setCharset(string $charset): object;

    public function getCharset(): ?string;

    public function isCacheable(): bool;

    public function isFresh(): bool;

    public function isValidateable(): bool;

    public function setPrivate(): object;

    public function setPublic(): object;

    public function setImmutable(bool $immutable = true): object;

    public function isImmutable(): bool;

    public function mustRevalidate(): bool;

    public function getDate(): ?\DateTimeInterface;

    public function setDate(\DateTimeInterface $date): object;

    public function getAge(): int;

    public function expire();

    public function getExpires(): ?\DateTimeInterface;

    public function setExpires(?\DateTimeInterface $date = null): object;

    public function getMaxAge(): ?int;

    public function setMaxAge(int $value): object;

    public function setSharedMaxAge(int $value): object;

    public function getTtl(): ?int;

    public function setTtl(int $seconds): object;

    public function setClientTtl(int $seconds): object;

    public function getLastModified(): ?\DateTimeInterface;

    public function setLastModified(?\DateTimeInterface $date = null): object;

    public function getEtag(): ?string;

    public function setEtag(?string $etag = null, bool $weak = false): object;

    public function setCache(array $options): object;

    public function setNotModified(): object;

    public function hasVary(): bool;

    public function getVary(): array;

    public function setVary($headers, bool $replace = true): object;

    public function isNotModified(Request $request): bool;

    public function isInvalid(): bool;

    public function isInformational(): bool;

    public function isSuccessful(): bool;

    public function isRedirection(): bool;

    public function isClientError(): bool;

    public function isServerError(): bool;

    public function isOk(): bool;

    public function isForbidden(): bool;

    public function isNotFound(): bool;

    public function isRedirect(?string $location = null): bool;

    public function isEmpty(): bool;

    public function setContentSafe(bool $safe = true): void;
}

<?php

namespace BrianFaust\ByteBuffer\Contracts;

interface Writeable
{
    /**
     * Writes a payload of bytes. This is an alias of append.
     *
     * @param string $value
     * @param int    $offset
     *
     * @return \BrianFaust\ByteBuffer\ByteBuffer
     */
    public function writeBytes(string $value, int $offset = 0): self;

    /**
     * Writes an UTF8 encoded string. This is an alias of writeUTF8String.
     *
     * @param string $value
     * @param int    $offset
     *
     * @return \BrianFaust\ByteBuffer\ByteBuffer
     */
    public function writeString(string $value, int $offset = 0): self;

    /**
     * Writes an UTF8 encoded string.
     *
     * @param string $value
     * @param int    $offset
     *
     * @return \BrianFaust\ByteBuffer\ByteBuffer
     */
    public function writeUTF8String(string $value, int $offset = 0): self;

    /**
     * Writes a NULL-terminated UTF8 encoded string.
     *
     * @param string $value
     * @param int    $offset
     *
     * @return \BrianFaust\ByteBuffer\ByteBuffer
     */
    public function writeCString(string $value, int $offset = 0): self;

    /**
     * Writes a length as uint32 prefixed UTF8 encoded string.
     *
     * @param string $value
     * @param int    $offset
     *
     * @return \BrianFaust\ByteBuffer\ByteBuffer
     */
    public function writeIString(string $value, int $offset = 0): self;

    /**
     * Writes a length as varint32 prefixed UTF8 encoded string.
     *
     * @param string $value
     * @param int    $offset
     *
     * @return \BrianFaust\ByteBuffer\ByteBuffer
     */
    public function writeVString(string $value, int $offset = 0): self;

    /**
     * Writes a 32bit float.
     *
     * @param float $value
     * @param int   $offset
     *
     * @return \BrianFaust\ByteBuffer\ByteBuffer
     */
    public function writeFloat32(float $value, int $offset = 0): self;

    /**
     * Writes a 64bit float.
     *
     * @param float $value
     * @param int   $offset
     *
     * @return \BrianFaust\ByteBuffer\ByteBuffer
     */
    public function writeFloat64(float $value, int $offset = 0): self;

    /**
     * Writes a 64bit float. This is an alias of writeFloat64.
     *
     * @param float $value
     * @param int   $offset
     *
     * @return \BrianFaust\ByteBuffer\ByteBuffer
     */
    public function writeDouble(float $value, int $offset = 0): self;

    /**
     * [writeInt8 description].
     *
     * @param int $value
     * @param int $offset
     *
     * @return \BrianFaust\ByteBuffer\ByteBuffer
     */
    public function writeInt8(int $value, int $offset = 0): self;

    /**
     * Writes a 16bit signed integer.
     *
     * @param int $value
     * @param int $offset
     *
     * @return \BrianFaust\ByteBuffer\ByteBuffer
     */
    public function writeInt16(int $value, int $offset = 0): self;

    /**
     * Writes a 32bit signed integer.
     *
     * @param int $value
     * @param int $offset
     *
     * @return \BrianFaust\ByteBuffer\ByteBuffer
     */
    public function writeInt32(int $value, int $offset = 0): self;

    /**
     * Writes a 64bit signed integer.
     *
     * @param int $value
     * @param int $offset
     *
     * @return \BrianFaust\ByteBuffer\ByteBuffer
     */
    public function writeInt64(int $value, int $offset = 0): self;

    /**
     * Writes an 8bit signed integer. This is an alias of writeInt8.
     *
     * @param int $value
     * @param int $offset
     *
     * @return \BrianFaust\ByteBuffer\ByteBuffer
     */
    public function writeByte(int $value, int $offset = 0): self;

    /**
     * Writes a 16bit signed integer. This is an alias of writeInt16.
     *
     * @param int $value
     * @param int $offset
     *
     * @return \BrianFaust\ByteBuffer\ByteBuffer
     */
    public function writeShort(int $value, int $offset = 0): self;

    /**
     * Writes a 32bit signed integer. This is an alias of writeInt32.
     *
     * @param int $value
     * @param int $offset
     *
     * @return \BrianFaust\ByteBuffer\ByteBuffer
     */
    public function writeInt(int $value, int $offset = 0): self;

    /**
     * Writes a 64bit signed integer. This is an alias of writeInt64.
     *
     * @param int $value
     * @param int $offset
     *
     * @return \BrianFaust\ByteBuffer\ByteBuffer
     */
    public function writeLong(int $value, int $offset = 0): self;

    /**
     * Writes an 8bit unsigned integer.
     *
     * @param int $value
     * @param int $offset
     *
     * @return \BrianFaust\ByteBuffer\ByteBuffer
     */
    public function writeUInt8(int $value, int $offset = 0): self;

    /**
     * Writes an icbit unsigned integer.
     *
     * @param int $value
     * @param int $offset
     *
     * @return \BrianFaust\ByteBuffer\ByteBuffer
     */
    public function writeUInt16(int $value, int $offset = 0): self;

    /**
     * Writes an 32bit unsigned integer.
     *
     * @param int $value
     * @param int $offset
     *
     * @return \BrianFaust\ByteBuffer\ByteBuffer
     */
    public function writeUInt32(int $value, int $offset = 0): self;

    /**
     * Writes an 64bit unsigned integer.
     *
     * @param int $value
     * @param int $offset
     *
     * @return \BrianFaust\ByteBuffer\ByteBuffer
     */
    public function writeUInt64(int $value, int $offset = 0): self;

    /**
     * Writes an 8bit unsigned integer. This is an alias of writeUInt8.
     *
     * @param int $value
     * @param int $offset
     *
     * @return \BrianFaust\ByteBuffer\ByteBuffer
     */
    public function writeUByte(int $value, int $offset = 0): self;

    /**
     * Writes an 16bit unsigned integer. This is an alias of writeUInt16.
     *
     * @param int $value
     * @param int $offset
     *
     * @return \BrianFaust\ByteBuffer\ByteBuffer
     */
    public function writeUShort(int $value, int $offset = 0): self;

    /**
     * Writes an 32bit unsigned integer. This is an alias of writeUInt32.
     *
     * @param int $value
     * @param int $offset
     *
     * @return \BrianFaust\ByteBuffer\ByteBuffer
     */
    public function writeUInt(int $value, int $offset = 0): self;

    /**
     * Writes an 64bit unsigned integer. This is an alias of writeUInt64.
     *
     * @param int $value
     * @param int $offset
     *
     * @return \BrianFaust\ByteBuffer\ByteBuffer
     */
    public function writeULong(int $value, int $offset = 0): self;
}
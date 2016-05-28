<?php
    /**
     * The MIT License (MIT)
     *
     * Copyright (c) 2016 Alorel, https://github.com/Alorel
     *
     * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated
     * documentation files (the "Software"), to deal in the Software without restriction, including without limitation the
     * rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit
     * persons to whom the Software is furnished to do so, subject to the following conditions:
     *
     * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the
     * Software.
     *
     * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT
     * NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
     * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
     * DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
     * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
     */

    namespace Alorel\Dropbox\OptionBuilder\Mixins;

    use Alorel\Dropbox\Options;
    use DateTimeInterface;

    /**
     * The value to store as the client_modified timestamp. Dropbox automatically records the time at which the file
     * was written to the Dropbox servers. It can also record an additional timestamp, provided by Dropbox desktop
     * clients, mobile clients, and API apps of when the file was actually created or modified
     *
     * @author Art <a.molcanovas@gmail.com>
     * @method $this setOption(string $key, $value)
     */
    trait ClientModifiedTrait {

        /**
         * The value to store as the client_modified timestamp. Dropbox automatically records the time at which the
         * file was written to the Dropbox servers. It can also record an additional timestamp, provided by Dropbox
         * desktop clients, mobile clients, and API apps of when the file was actually created or modified.
         *
         * @author Art <a.molcanovas@gmail.com>
         *
         * @param DateTimeInterface $set The setting
         *
         * @return self
         */
        function setClientModified(DateTimeInterface $set) {
            return $this->setOption('client_modified', $set->format(Options::DATETIME_FORMAT));
        }
    }
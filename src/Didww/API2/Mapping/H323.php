<?php
/**
 * Copyright (C) 2012 Igor Fedoronchuk
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @category DIDWW
 * @package API2
 * @author Fedoronchuk Igor <fedoronchuk@gmail.com>
 * @copyright Copyright (C) 2012 by Igor Fedoronchuk
 * @license MIT
 */

namespace Didww\API2\Mapping;

/**
 * MappingToH323
 * DID mapping to H323
 * @category DIDWW
 * @package API2
 * @copyright Copyright (C) 2012 by Igor Fedoronchuk
 * @license MIT
 */
class H323 extends VOIP
{
    /**
     * Class constructor
     * @param string $host
     * @param string $account
     */
    public function __construct($host = NULL, $account = NULL)
    {
        parent::__construct($host, $account);
        $this->mapProto = 'H323';
    }
}

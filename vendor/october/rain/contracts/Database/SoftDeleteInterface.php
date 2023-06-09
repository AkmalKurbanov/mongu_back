<?php namespace October\Contracts\Database;

/**
 * SoftDeleteInterface
 *
 * @package october\contracts
 * @author Alexey Bobkov, Samuel Georges
 */
interface SoftDeleteInterface
{
    /**
     * trashed
     * @return bool
     */
    public function trashed();

    /**
     * restore
     * @return bool|null
     */
    public function restore();
}

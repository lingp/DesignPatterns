<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2018/4/11
 * Time: 18:35
 */

namespace Structural\DataMapper;

/**
 *  数据映射类
 */
class UserMapper
{
    protected $adapter;

    public function __construct(DBAL $dbLayer)
    {
        $this->adapter = $dbLayer;
    }

    public function save(User $user)
    {
        $data = [
            'userid' => $user->getUserId(),
            'username' => $user->getUsername(),
            'email' => $user->getEmail()
        ];

        if (null == ($id = $user->getUserId())) {
            unset($data['userid']);
            $this->adapter->insert($data);
            return true;
        } else {
            $this->adapter->update($data, array('userid = ?' => $id));
            return true;
        }
    }

    public function findById($id)
    {
        $result = $this->adapter->find($id);
        if (0 == count($result)) {
            throw new \InvalidArgumentException("User #$id  not found");
        }
        $row = $result->current();

        return $this->mapObject($row);
    }

    public function findAll()
    {
        $result_set = $this->adapter->findAll();
        $entries = [];

        foreach ($result_set as $row) {
            $entries[] = $this->mapObject($row);
        }
        return $entries;
    }

    protected function mapObject(array $row)
    {
        $entry = new User();
        $entry->setUserId($row['userid']);
        $entry->setUsername($row['username']);
        $entry->setEmail($row['email']);
        return $entry;
    }

}
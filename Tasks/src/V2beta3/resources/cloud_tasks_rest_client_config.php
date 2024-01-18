<?php

return [
    'interfaces' => [
        'google.cloud.location.Locations' => [
            'GetLocation' => [
                'method' => 'get',
                'uriTemplate' => '/v2beta3/{name=projects/*/locations/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'ListLocations' => [
                'method' => 'get',
                'uriTemplate' => '/v2beta3/{name=projects/*}/locations',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
        ],
        'google.cloud.tasks.v2beta3.CloudTasks' => [
            'CreateQueue' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta3/{parent=projects/*/locations/*}/queues',
                'body' => 'queue',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'CreateTask' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta3/{parent=projects/*/locations/*/queues/*}/tasks',
                'body' => '*',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'DeleteQueue' => [
                'method' => 'delete',
                'uriTemplate' => '/v2beta3/{name=projects/*/locations/*/queues/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'DeleteTask' => [
                'method' => 'delete',
                'uriTemplate' => '/v2beta3/{name=projects/*/locations/*/queues/*/tasks/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'GetIamPolicy' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta3/{resource=projects/*/locations/*/queues/*}:getIamPolicy',
                'body' => '*',
                'placeholders' => [
                    'resource' => [
                        'getters' => [
                            'getResource',
                        ],
                    ],
                ],
            ],
            'GetQueue' => [
                'method' => 'get',
                'uriTemplate' => '/v2beta3/{name=projects/*/locations/*/queues/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'GetTask' => [
                'method' => 'get',
                'uriTemplate' => '/v2beta3/{name=projects/*/locations/*/queues/*/tasks/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'ListQueues' => [
                'method' => 'get',
                'uriTemplate' => '/v2beta3/{parent=projects/*/locations/*}/queues',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'ListTasks' => [
                'method' => 'get',
                'uriTemplate' => '/v2beta3/{parent=projects/*/locations/*/queues/*}/tasks',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'PauseQueue' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta3/{name=projects/*/locations/*/queues/*}:pause',
                'body' => '*',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'PurgeQueue' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta3/{name=projects/*/locations/*/queues/*}:purge',
                'body' => '*',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'ResumeQueue' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta3/{name=projects/*/locations/*/queues/*}:resume',
                'body' => '*',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'RunTask' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta3/{name=projects/*/locations/*/queues/*/tasks/*}:run',
                'body' => '*',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'SetIamPolicy' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta3/{resource=projects/*/locations/*/queues/*}:setIamPolicy',
                'body' => '*',
                'placeholders' => [
                    'resource' => [
                        'getters' => [
                            'getResource',
                        ],
                    ],
                ],
            ],
            'TestIamPermissions' => [
                'method' => 'post',
                'uriTemplate' => '/v2beta3/{resource=projects/*/locations/*/queues/*}:testIamPermissions',
                'body' => '*',
                'placeholders' => [
                    'resource' => [
                        'getters' => [
                            'getResource',
                        ],
                    ],
                ],
            ],
            'UpdateQueue' => [
                'method' => 'patch',
                'uriTemplate' => '/v2beta3/{queue.name=projects/*/locations/*/queues/*}',
                'body' => 'queue',
                'placeholders' => [
                    'queue.name' => [
                        'getters' => [
                            'getQueue',
                            'getName',
                        ],
                    ],
                ],
            ],
        ],
    ],
    'numericEnums' => true,
];

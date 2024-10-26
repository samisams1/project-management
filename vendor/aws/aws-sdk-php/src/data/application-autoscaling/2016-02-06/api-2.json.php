<?php
// This file was auto-generated from sdk-root/src/data/application-autoscaling/2016-02-06/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2016-02-06', 'endpointPrefix' => 'application-autoscaling', 'jsonVersion' => '1.1', 'protocol' => 'json', 'protocols' => [ 'json', ], 'serviceFullName' => 'Application Auto Scaling', 'serviceId' => 'Application Auto Scaling', 'signatureVersion' => 'v4', 'signingName' => 'application-autoscaling', 'targetPrefix' => 'AnyScaleFrontendService', 'uid' => 'application-autoscaling-2016-02-06', 'auth' => [ 'aws.auth#sigv4', ], ], 'operations' => [ 'DeleteScalingPolicy' => [ 'name' => 'DeleteScalingPolicy', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteScalingPolicyRequest', ], 'output' => [ 'shape' => 'DeleteScalingPolicyResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ObjectNotFoundException', ], [ 'shape' => 'ConcurrentUpdateException', ], [ 'shape' => 'InternalServiceException', ], ], ], 'DeleteScheduledAction' => [ 'name' => 'DeleteScheduledAction', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteScheduledActionRequest', ], 'output' => [ 'shape' => 'DeleteScheduledActionResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ObjectNotFoundException', ], [ 'shape' => 'ConcurrentUpdateException', ], [ 'shape' => 'InternalServiceException', ], ], ], 'DeregisterScalableTarget' => [ 'name' => 'DeregisterScalableTarget', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeregisterScalableTargetRequest', ], 'output' => [ 'shape' => 'DeregisterScalableTargetResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ObjectNotFoundException', ], [ 'shape' => 'ConcurrentUpdateException', ], [ 'shape' => 'InternalServiceException', ], ], ], 'DescribeScalableTargets' => [ 'name' => 'DescribeScalableTargets', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeScalableTargetsRequest', ], 'output' => [ 'shape' => 'DescribeScalableTargetsResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InvalidNextTokenException', ], [ 'shape' => 'ConcurrentUpdateException', ], [ 'shape' => 'InternalServiceException', ], ], ], 'DescribeScalingActivities' => [ 'name' => 'DescribeScalingActivities', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeScalingActivitiesRequest', ], 'output' => [ 'shape' => 'DescribeScalingActivitiesResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InvalidNextTokenException', ], [ 'shape' => 'ConcurrentUpdateException', ], [ 'shape' => 'InternalServiceException', ], ], ], 'DescribeScalingPolicies' => [ 'name' => 'DescribeScalingPolicies', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeScalingPoliciesRequest', ], 'output' => [ 'shape' => 'DescribeScalingPoliciesResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'FailedResourceAccessException', ], [ 'shape' => 'InvalidNextTokenException', ], [ 'shape' => 'ConcurrentUpdateException', ], [ 'shape' => 'InternalServiceException', ], ], ], 'DescribeScheduledActions' => [ 'name' => 'DescribeScheduledActions', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeScheduledActionsRequest', ], 'output' => [ 'shape' => 'DescribeScheduledActionsResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InvalidNextTokenException', ], [ 'shape' => 'ConcurrentUpdateException', ], [ 'shape' => 'InternalServiceException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], ], ], 'PutScalingPolicy' => [ 'name' => 'PutScalingPolicy', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PutScalingPolicyRequest', ], 'output' => [ 'shape' => 'PutScalingPolicyResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ObjectNotFoundException', ], [ 'shape' => 'ConcurrentUpdateException', ], [ 'shape' => 'FailedResourceAccessException', ], [ 'shape' => 'InternalServiceException', ], ], ], 'PutScheduledAction' => [ 'name' => 'PutScheduledAction', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PutScheduledActionRequest', ], 'output' => [ 'shape' => 'PutScheduledActionResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ObjectNotFoundException', ], [ 'shape' => 'ConcurrentUpdateException', ], [ 'shape' => 'InternalServiceException', ], ], ], 'RegisterScalableTarget' => [ 'name' => 'RegisterScalableTarget', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'RegisterScalableTargetRequest', ], 'output' => [ 'shape' => 'RegisterScalableTargetResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ConcurrentUpdateException', ], [ 'shape' => 'InternalServiceException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'output' => [ 'shape' => 'TagResourceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'TooManyTagsException', ], [ 'shape' => 'ValidationException', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'output' => [ 'shape' => 'UntagResourceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], ], 'shapes' => [ 'AdjustmentType' => [ 'type' => 'string', 'enum' => [ 'ChangeInCapacity', 'PercentChangeInCapacity', 'ExactCapacity', ], ], 'Alarm' => [ 'type' => 'structure', 'required' => [ 'AlarmName', 'AlarmARN', ], 'members' => [ 'AlarmName' => [ 'shape' => 'ResourceId', ], 'AlarmARN' => [ 'shape' => 'ResourceId', ], ], ], 'Alarms' => [ 'type' => 'list', 'member' => [ 'shape' => 'Alarm', ], ], 'AmazonResourceName' => [ 'type' => 'string', 'max' => 1011, 'min' => 1, 'pattern' => '^arn:.+:application-autoscaling:.+:[0-9]+:scalable-target\\/[a-zA-Z0-9-]+$', ], 'ConcurrentUpdateException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'Cooldown' => [ 'type' => 'integer', ], 'CustomizedMetricSpecification' => [ 'type' => 'structure', 'members' => [ 'MetricName' => [ 'shape' => 'MetricName', ], 'Namespace' => [ 'shape' => 'MetricNamespace', ], 'Dimensions' => [ 'shape' => 'MetricDimensions', ], 'Statistic' => [ 'shape' => 'MetricStatistic', ], 'Unit' => [ 'shape' => 'MetricUnit', ], 'Metrics' => [ 'shape' => 'TargetTrackingMetricDataQueries', ], ], ], 'DeleteScalingPolicyRequest' => [ 'type' => 'structure', 'required' => [ 'PolicyName', 'ServiceNamespace', 'ResourceId', 'ScalableDimension', ], 'members' => [ 'PolicyName' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'ServiceNamespace' => [ 'shape' => 'ServiceNamespace', ], 'ResourceId' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'ScalableDimension' => [ 'shape' => 'ScalableDimension', ], ], ], 'DeleteScalingPolicyResponse' => [ 'type' => 'structure', 'members' => [], ], 'DeleteScheduledActionRequest' => [ 'type' => 'structure', 'required' => [ 'ServiceNamespace', 'ScheduledActionName', 'ResourceId', 'ScalableDimension', ], 'members' => [ 'ServiceNamespace' => [ 'shape' => 'ServiceNamespace', ], 'ScheduledActionName' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'ResourceId' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'ScalableDimension' => [ 'shape' => 'ScalableDimension', ], ], ], 'DeleteScheduledActionResponse' => [ 'type' => 'structure', 'members' => [], ], 'DeregisterScalableTargetRequest' => [ 'type' => 'structure', 'required' => [ 'ServiceNamespace', 'ResourceId', 'ScalableDimension', ], 'members' => [ 'ServiceNamespace' => [ 'shape' => 'ServiceNamespace', ], 'ResourceId' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'ScalableDimension' => [ 'shape' => 'ScalableDimension', ], ], ], 'DeregisterScalableTargetResponse' => [ 'type' => 'structure', 'members' => [], ], 'DescribeScalableTargetsRequest' => [ 'type' => 'structure', 'required' => [ 'ServiceNamespace', ], 'members' => [ 'ServiceNamespace' => [ 'shape' => 'ServiceNamespace', ], 'ResourceIds' => [ 'shape' => 'ResourceIdsMaxLen1600', ], 'ScalableDimension' => [ 'shape' => 'ScalableDimension', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'XmlString', ], ], ], 'DescribeScalableTargetsResponse' => [ 'type' => 'structure', 'members' => [ 'ScalableTargets' => [ 'shape' => 'ScalableTargets', ], 'NextToken' => [ 'shape' => 'XmlString', ], ], ], 'DescribeScalingActivitiesRequest' => [ 'type' => 'structure', 'required' => [ 'ServiceNamespace', ], 'members' => [ 'ServiceNamespace' => [ 'shape' => 'ServiceNamespace', ], 'ResourceId' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'ScalableDimension' => [ 'shape' => 'ScalableDimension', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'XmlString', ], 'IncludeNotScaledActivities' => [ 'shape' => 'IncludeNotScaledActivities', ], ], ], 'DescribeScalingActivitiesResponse' => [ 'type' => 'structure', 'members' => [ 'ScalingActivities' => [ 'shape' => 'ScalingActivities', ], 'NextToken' => [ 'shape' => 'XmlString', ], ], ], 'DescribeScalingPoliciesRequest' => [ 'type' => 'structure', 'required' => [ 'ServiceNamespace', ], 'members' => [ 'PolicyNames' => [ 'shape' => 'ResourceIdsMaxLen1600', ], 'ServiceNamespace' => [ 'shape' => 'ServiceNamespace', ], 'ResourceId' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'ScalableDimension' => [ 'shape' => 'ScalableDimension', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'XmlString', ], ], ], 'DescribeScalingPoliciesResponse' => [ 'type' => 'structure', 'members' => [ 'ScalingPolicies' => [ 'shape' => 'ScalingPolicies', ], 'NextToken' => [ 'shape' => 'XmlString', ], ], ], 'DescribeScheduledActionsRequest' => [ 'type' => 'structure', 'required' => [ 'ServiceNamespace', ], 'members' => [ 'ScheduledActionNames' => [ 'shape' => 'ResourceIdsMaxLen1600', ], 'ServiceNamespace' => [ 'shape' => 'ServiceNamespace', ], 'ResourceId' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'ScalableDimension' => [ 'shape' => 'ScalableDimension', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'XmlString', ], ], ], 'DescribeScheduledActionsResponse' => [ 'type' => 'structure', 'members' => [ 'ScheduledActions' => [ 'shape' => 'ScheduledActions', ], 'NextToken' => [ 'shape' => 'XmlString', ], ], ], 'DisableScaleIn' => [ 'type' => 'boolean', ], 'ErrorMessage' => [ 'type' => 'string', ], 'ExceptionMessage' => [ 'type' => 'string', ], 'Expression' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*', ], 'FailedResourceAccessException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'Id' => [ 'type' => 'string', 'max' => 255, 'min' => 1, 'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*', ], 'IncludeNotScaledActivities' => [ 'type' => 'boolean', ], 'InternalServiceException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'InvalidNextTokenException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'LimitExceededException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceARN', ], 'members' => [ 'ResourceARN' => [ 'shape' => 'AmazonResourceName', ], ], ], 'ListTagsForResourceResponse' => [ 'type' => 'structure', 'members' => [ 'Tags' => [ 'shape' => 'TagMap', ], ], ], 'MaxResults' => [ 'type' => 'integer', ], 'MetricAggregationType' => [ 'type' => 'string', 'enum' => [ 'Average', 'Minimum', 'Maximum', ], ], 'MetricDimension' => [ 'type' => 'structure', 'required' => [ 'Name', 'Value', ], 'members' => [ 'Name' => [ 'shape' => 'MetricDimensionName', ], 'Value' => [ 'shape' => 'MetricDimensionValue', ], ], ], 'MetricDimensionName' => [ 'type' => 'string', ], 'MetricDimensionValue' => [ 'type' => 'string', ], 'MetricDimensions' => [ 'type' => 'list', 'member' => [ 'shape' => 'MetricDimension', ], ], 'MetricName' => [ 'type' => 'string', ], 'MetricNamespace' => [ 'type' => 'string', ], 'MetricScale' => [ 'type' => 'double', ], 'MetricStatistic' => [ 'type' => 'string', 'enum' => [ 'Average', 'Minimum', 'Maximum', 'SampleCount', 'Sum', ], ], 'MetricType' => [ 'type' => 'string', 'enum' => [ 'DynamoDBReadCapacityUtilization', 'DynamoDBWriteCapacityUtilization', 'ALBRequestCountPerTarget', 'RDSReaderAverageCPUUtilization', 'RDSReaderAverageDatabaseConnections', 'EC2SpotFleetRequestAverageCPUUtilization', 'EC2SpotFleetRequestAverageNetworkIn', 'EC2SpotFleetRequestAverageNetworkOut', 'SageMakerVariantInvocationsPerInstance', 'ECSServiceAverageCPUUtilization', 'ECSServiceAverageMemoryUtilization', 'AppStreamAverageCapacityUtilization', 'ComprehendInferenceUtilization', 'LambdaProvisionedConcurrencyUtilization', 'CassandraReadCapacityUtilization', 'CassandraWriteCapacityUtilization', 'KafkaBrokerStorageUtilization', 'ElastiCachePrimaryEngineCPUUtilization', 'ElastiCacheReplicaEngineCPUUtilization', 'ElastiCacheDatabaseMemoryUsageCountedForEvictPercentage', 'NeptuneReaderAverageCPUUtilization', 'SageMakerVariantProvisionedConcurrencyUtilization', 'ElastiCacheDatabaseCapacityUsageCountedForEvictPercentage', 'SageMakerInferenceComponentInvocationsPerCopy', 'WorkSpacesAverageUserSessionsCapacityUtilization', 'SageMakerInferenceComponentConcurrentRequestsPerCopyHighResolution', 'SageMakerVariantConcurrentRequestsPerModelHighResolution', ], ], 'MetricUnit' => [ 'type' => 'string', ], 'MinAdjustmentMagnitude' => [ 'type' => 'integer', ], 'NotScaledReason' => [ 'type' => 'structure', 'required' => [ 'Code', ], 'members' => [ 'Code' => [ 'shape' => 'XmlString', ], 'MaxCapacity' => [ 'shape' => 'ResourceCapacity', ], 'MinCapacity' => [ 'shape' => 'ResourceCapacity', ], 'CurrentCapacity' => [ 'shape' => 'ResourceCapacity', ], ], ], 'NotScaledReasons' => [ 'type' => 'list', 'member' => [ 'shape' => 'NotScaledReason', ], ], 'ObjectNotFoundException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'PolicyName' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '\\p{Print}+', ], 'PolicyType' => [ 'type' => 'string', 'enum' => [ 'StepScaling', 'TargetTrackingScaling', ], ], 'PredefinedMetricSpecification' => [ 'type' => 'structure', 'required' => [ 'PredefinedMetricType', ], 'members' => [ 'PredefinedMetricType' => [ 'shape' => 'MetricType', ], 'ResourceLabel' => [ 'shape' => 'ResourceLabel', ], ], ], 'PutScalingPolicyRequest' => [ 'type' => 'structure', 'required' => [ 'PolicyName', 'ServiceNamespace', 'ResourceId', 'ScalableDimension', ], 'members' => [ 'PolicyName' => [ 'shape' => 'PolicyName', ], 'ServiceNamespace' => [ 'shape' => 'ServiceNamespace', ], 'ResourceId' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'ScalableDimension' => [ 'shape' => 'ScalableDimension', ], 'PolicyType' => [ 'shape' => 'PolicyType', ], 'StepScalingPolicyConfiguration' => [ 'shape' => 'StepScalingPolicyConfiguration', ], 'TargetTrackingScalingPolicyConfiguration' => [ 'shape' => 'TargetTrackingScalingPolicyConfiguration', ], ], ], 'PutScalingPolicyResponse' => [ 'type' => 'structure', 'required' => [ 'PolicyARN', ], 'members' => [ 'PolicyARN' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'Alarms' => [ 'shape' => 'Alarms', ], ], ], 'PutScheduledActionRequest' => [ 'type' => 'structure', 'required' => [ 'ServiceNamespace', 'ScheduledActionName', 'ResourceId', 'ScalableDimension', ], 'members' => [ 'ServiceNamespace' => [ 'shape' => 'ServiceNamespace', ], 'Schedule' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'Timezone' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'ScheduledActionName' => [ 'shape' => 'ScheduledActionName', ], 'ResourceId' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'ScalableDimension' => [ 'shape' => 'ScalableDimension', ], 'StartTime' => [ 'shape' => 'TimestampType', ], 'EndTime' => [ 'shape' => 'TimestampType', ], 'ScalableTargetAction' => [ 'shape' => 'ScalableTargetAction', ], ], ], 'PutScheduledActionResponse' => [ 'type' => 'structure', 'members' => [], ], 'RegisterScalableTargetRequest' => [ 'type' => 'structure', 'required' => [ 'ServiceNamespace', 'ResourceId', 'ScalableDimension', ], 'members' => [ 'ServiceNamespace' => [ 'shape' => 'ServiceNamespace', ], 'ResourceId' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'ScalableDimension' => [ 'shape' => 'ScalableDimension', ], 'MinCapacity' => [ 'shape' => 'ResourceCapacity', ], 'MaxCapacity' => [ 'shape' => 'ResourceCapacity', ], 'RoleARN' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'SuspendedState' => [ 'shape' => 'SuspendedState', ], 'Tags' => [ 'shape' => 'TagMap', ], ], ], 'RegisterScalableTargetResponse' => [ 'type' => 'structure', 'members' => [ 'ScalableTargetARN' => [ 'shape' => 'XmlString', ], ], ], 'ResourceCapacity' => [ 'type' => 'integer', ], 'ResourceId' => [ 'type' => 'string', 'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*', ], 'ResourceIdMaxLen1600' => [ 'type' => 'string', 'max' => 1600, 'min' => 1, 'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*', ], 'ResourceIdsMaxLen1600' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'max' => 50, ], 'ResourceLabel' => [ 'type' => 'string', 'max' => 1023, 'min' => 1, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ExceptionMessage', ], 'ResourceName' => [ 'shape' => 'AmazonResourceName', ], ], 'exception' => true, ], 'ReturnData' => [ 'type' => 'boolean', ], 'ScalableDimension' => [ 'type' => 'string', 'enum' => [ 'ecs:service:DesiredCount', 'ec2:spot-fleet-request:TargetCapacity', 'elasticmapreduce:instancegroup:InstanceCount', 'appstream:fleet:DesiredCapacity', 'dynamodb:table:ReadCapacityUnits', 'dynamodb:table:WriteCapacityUnits', 'dynamodb:index:ReadCapacityUnits', 'dynamodb:index:WriteCapacityUnits', 'rds:cluster:ReadReplicaCount', 'sagemaker:variant:DesiredInstanceCount', 'custom-resource:ResourceType:Property', 'comprehend:document-classifier-endpoint:DesiredInferenceUnits', 'comprehend:entity-recognizer-endpoint:DesiredInferenceUnits', 'lambda:function:ProvisionedConcurrency', 'cassandra:table:ReadCapacityUnits', 'cassandra:table:WriteCapacityUnits', 'kafka:broker-storage:VolumeSize', 'elasticache:replication-group:NodeGroups', 'elasticache:replication-group:Replicas', 'neptune:cluster:ReadReplicaCount', 'sagemaker:variant:DesiredProvisionedConcurrency', 'sagemaker:inference-component:DesiredCopyCount', 'workspaces:workspacespool:DesiredUserSessions', ], ], 'ScalableTarget' => [ 'type' => 'structure', 'required' => [ 'ServiceNamespace', 'ResourceId', 'ScalableDimension', 'MinCapacity', 'MaxCapacity', 'RoleARN', 'CreationTime', ], 'members' => [ 'ServiceNamespace' => [ 'shape' => 'ServiceNamespace', ], 'ResourceId' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'ScalableDimension' => [ 'shape' => 'ScalableDimension', ], 'MinCapacity' => [ 'shape' => 'ResourceCapacity', ], 'MaxCapacity' => [ 'shape' => 'ResourceCapacity', ], 'RoleARN' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'CreationTime' => [ 'shape' => 'TimestampType', ], 'SuspendedState' => [ 'shape' => 'SuspendedState', ], 'ScalableTargetARN' => [ 'shape' => 'XmlString', ], ], ], 'ScalableTargetAction' => [ 'type' => 'structure', 'members' => [ 'MinCapacity' => [ 'shape' => 'ResourceCapacity', ], 'MaxCapacity' => [ 'shape' => 'ResourceCapacity', ], ], ], 'ScalableTargets' => [ 'type' => 'list', 'member' => [ 'shape' => 'ScalableTarget', ], ], 'ScalingActivities' => [ 'type' => 'list', 'member' => [ 'shape' => 'ScalingActivity', ], ], 'ScalingActivity' => [ 'type' => 'structure', 'required' => [ 'ActivityId', 'ServiceNamespace', 'ResourceId', 'ScalableDimension', 'Description', 'Cause', 'StartTime', 'StatusCode', ], 'members' => [ 'ActivityId' => [ 'shape' => 'ResourceId', ], 'ServiceNamespace' => [ 'shape' => 'ServiceNamespace', ], 'ResourceId' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'ScalableDimension' => [ 'shape' => 'ScalableDimension', ], 'Description' => [ 'shape' => 'XmlString', ], 'Cause' => [ 'shape' => 'XmlString', ], 'StartTime' => [ 'shape' => 'TimestampType', ], 'EndTime' => [ 'shape' => 'TimestampType', ], 'StatusCode' => [ 'shape' => 'ScalingActivityStatusCode', ], 'StatusMessage' => [ 'shape' => 'XmlString', ], 'Details' => [ 'shape' => 'XmlString', ], 'NotScaledReasons' => [ 'shape' => 'NotScaledReasons', ], ], ], 'ScalingActivityStatusCode' => [ 'type' => 'string', 'enum' => [ 'Pending', 'InProgress', 'Successful', 'Overridden', 'Unfulfilled', 'Failed', ], ], 'ScalingAdjustment' => [ 'type' => 'integer', ], 'ScalingPolicies' => [ 'type' => 'list', 'member' => [ 'shape' => 'ScalingPolicy', ], ], 'ScalingPolicy' => [ 'type' => 'structure', 'required' => [ 'PolicyARN', 'PolicyName', 'ServiceNamespace', 'ResourceId', 'ScalableDimension', 'PolicyType', 'CreationTime', ], 'members' => [ 'PolicyARN' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'PolicyName' => [ 'shape' => 'PolicyName', ], 'ServiceNamespace' => [ 'shape' => 'ServiceNamespace', ], 'ResourceId' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'ScalableDimension' => [ 'shape' => 'ScalableDimension', ], 'PolicyType' => [ 'shape' => 'PolicyType', ], 'StepScalingPolicyConfiguration' => [ 'shape' => 'StepScalingPolicyConfiguration', ], 'TargetTrackingScalingPolicyConfiguration' => [ 'shape' => 'TargetTrackingScalingPolicyConfiguration', ], 'Alarms' => [ 'shape' => 'Alarms', ], 'CreationTime' => [ 'shape' => 'TimestampType', ], ], ], 'ScalingSuspended' => [ 'type' => 'boolean', ], 'ScheduledAction' => [ 'type' => 'structure', 'required' => [ 'ScheduledActionName', 'ScheduledActionARN', 'ServiceNamespace', 'Schedule', 'ResourceId', 'CreationTime', ], 'members' => [ 'ScheduledActionName' => [ 'shape' => 'ScheduledActionName', ], 'ScheduledActionARN' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'ServiceNamespace' => [ 'shape' => 'ServiceNamespace', ], 'Schedule' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'Timezone' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'ResourceId' => [ 'shape' => 'ResourceIdMaxLen1600', ], 'ScalableDimension' => [ 'shape' => 'ScalableDimension', ], 'StartTime' => [ 'shape' => 'TimestampType', ], 'EndTime' => [ 'shape' => 'TimestampType', ], 'ScalableTargetAction' => [ 'shape' => 'ScalableTargetAction', ], 'CreationTime' => [ 'shape' => 'TimestampType', ], ], ], 'ScheduledActionName' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '(?!((^[ ]+.*)|(.*([\\u0000-\\u001f]|[\\u007f-\\u009f]|[:/|])+.*)|(.*[ ]+$))).+', ], 'ScheduledActions' => [ 'type' => 'list', 'member' => [ 'shape' => 'ScheduledAction', ], ], 'ServiceNamespace' => [ 'type' => 'string', 'enum' => [ 'ecs', 'elasticmapreduce', 'ec2', 'appstream', 'dynamodb', 'rds', 'sagemaker', 'custom-resource', 'comprehend', 'lambda', 'cassandra', 'kafka', 'elasticache', 'neptune', 'workspaces', ], ], 'StepAdjustment' => [ 'type' => 'structure', 'required' => [ 'ScalingAdjustment', ], 'members' => [ 'MetricIntervalLowerBound' => [ 'shape' => 'MetricScale', ], 'MetricIntervalUpperBound' => [ 'shape' => 'MetricScale', ], 'ScalingAdjustment' => [ 'shape' => 'ScalingAdjustment', ], ], ], 'StepAdjustments' => [ 'type' => 'list', 'member' => [ 'shape' => 'StepAdjustment', ], ], 'StepScalingPolicyConfiguration' => [ 'type' => 'structure', 'members' => [ 'AdjustmentType' => [ 'shape' => 'AdjustmentType', ], 'StepAdjustments' => [ 'shape' => 'StepAdjustments', ], 'MinAdjustmentMagnitude' => [ 'shape' => 'MinAdjustmentMagnitude', ], 'Cooldown' => [ 'shape' => 'Cooldown', ], 'MetricAggregationType' => [ 'shape' => 'MetricAggregationType', ], ], ], 'SuspendedState' => [ 'type' => 'structure', 'members' => [ 'DynamicScalingInSuspended' => [ 'shape' => 'ScalingSuspended', ], 'DynamicScalingOutSuspended' => [ 'shape' => 'ScalingSuspended', ], 'ScheduledScalingSuspended' => [ 'shape' => 'ScalingSuspended', ], ], ], 'TagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, ], 'TagKeyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], 'max' => 200, 'min' => 0, ], 'TagMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'TagKey', ], 'value' => [ 'shape' => 'TagValue', ], ], 'TagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceARN', 'Tags', ], 'members' => [ 'ResourceARN' => [ 'shape' => 'AmazonResourceName', ], 'Tags' => [ 'shape' => 'TagMap', ], ], ], 'TagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'TagValue' => [ 'type' => 'string', 'max' => 256, 'min' => 0, ], 'TargetTrackingMetric' => [ 'type' => 'structure', 'members' => [ 'Dimensions' => [ 'shape' => 'TargetTrackingMetricDimensions', ], 'MetricName' => [ 'shape' => 'TargetTrackingMetricName', ], 'Namespace' => [ 'shape' => 'TargetTrackingMetricNamespace', ], ], ], 'TargetTrackingMetricDataQueries' => [ 'type' => 'list', 'member' => [ 'shape' => 'TargetTrackingMetricDataQuery', ], ], 'TargetTrackingMetricDataQuery' => [ 'type' => 'structure', 'required' => [ 'Id', ], 'members' => [ 'Expression' => [ 'shape' => 'Expression', ], 'Id' => [ 'shape' => 'Id', ], 'Label' => [ 'shape' => 'XmlString', ], 'MetricStat' => [ 'shape' => 'TargetTrackingMetricStat', ], 'ReturnData' => [ 'shape' => 'ReturnData', ], ], ], 'TargetTrackingMetricDimension' => [ 'type' => 'structure', 'required' => [ 'Name', 'Value', ], 'members' => [ 'Name' => [ 'shape' => 'TargetTrackingMetricDimensionName', ], 'Value' => [ 'shape' => 'TargetTrackingMetricDimensionValue', ], ], ], 'TargetTrackingMetricDimensionName' => [ 'type' => 'string', 'max' => 255, 'min' => 1, 'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*', ], 'TargetTrackingMetricDimensionValue' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, 'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*', ], 'TargetTrackingMetricDimensions' => [ 'type' => 'list', 'member' => [ 'shape' => 'TargetTrackingMetricDimension', ], ], 'TargetTrackingMetricName' => [ 'type' => 'string', 'max' => 255, 'min' => 1, 'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*', ], 'TargetTrackingMetricNamespace' => [ 'type' => 'string', 'max' => 255, 'min' => 1, 'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*', ], 'TargetTrackingMetricStat' => [ 'type' => 'structure', 'required' => [ 'Metric', 'Stat', ], 'members' => [ 'Metric' => [ 'shape' => 'TargetTrackingMetric', ], 'Stat' => [ 'shape' => 'XmlString', ], 'Unit' => [ 'shape' => 'TargetTrackingMetricUnit', ], ], ], 'TargetTrackingMetricUnit' => [ 'type' => 'string', 'max' => 1023, 'min' => 1, 'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*', ], 'TargetTrackingScalingPolicyConfiguration' => [ 'type' => 'structure', 'required' => [ 'TargetValue', ], 'members' => [ 'TargetValue' => [ 'shape' => 'MetricScale', ], 'PredefinedMetricSpecification' => [ 'shape' => 'PredefinedMetricSpecification', ], 'CustomizedMetricSpecification' => [ 'shape' => 'CustomizedMetricSpecification', ], 'ScaleOutCooldown' => [ 'shape' => 'Cooldown', ], 'ScaleInCooldown' => [ 'shape' => 'Cooldown', ], 'DisableScaleIn' => [ 'shape' => 'DisableScaleIn', ], ], ], 'TimestampType' => [ 'type' => 'timestamp', ], 'TooManyTagsException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ExceptionMessage', ], 'ResourceName' => [ 'shape' => 'AmazonResourceName', ], ], 'exception' => true, ], 'UntagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceARN', 'TagKeys', ], 'members' => [ 'ResourceARN' => [ 'shape' => 'AmazonResourceName', ], 'TagKeys' => [ 'shape' => 'TagKeyList', ], ], ], 'UntagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'ValidationException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'XmlString' => [ 'type' => 'string', 'pattern' => '[\\u0020-\\uD7FF\\uE000-\\uFFFD\\uD800\\uDC00-\\uDBFF\\uDFFF\\r\\n\\t]*', ], ],];

<?php
// This file was auto-generated from sdk-root/src/data/bedrock-runtime/2023-09-30/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2023-09-30', 'endpointPrefix' => 'bedrock-runtime', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceFullName' => 'Amazon Bedrock Runtime', 'serviceId' => 'Bedrock Runtime', 'signatureVersion' => 'v4', 'signingName' => 'bedrock', 'uid' => 'bedrock-runtime-2023-09-30', ], 'operations' => [ 'Converse' => [ 'name' => 'Converse', 'http' => [ 'method' => 'POST', 'requestUri' => '/model/{modelId}/converse', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ConverseRequest', ], 'output' => [ 'shape' => 'ConverseResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ModelTimeoutException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ModelNotReadyException', ], [ 'shape' => 'ModelErrorException', ], ], ], 'ConverseStream' => [ 'name' => 'ConverseStream', 'http' => [ 'method' => 'POST', 'requestUri' => '/model/{modelId}/converse-stream', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ConverseStreamRequest', ], 'output' => [ 'shape' => 'ConverseStreamResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ModelTimeoutException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ModelNotReadyException', ], [ 'shape' => 'ModelErrorException', ], ], ], 'InvokeModel' => [ 'name' => 'InvokeModel', 'http' => [ 'method' => 'POST', 'requestUri' => '/model/{modelId}/invoke', 'responseCode' => 200, ], 'input' => [ 'shape' => 'InvokeModelRequest', ], 'output' => [ 'shape' => 'InvokeModelResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ModelTimeoutException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ModelNotReadyException', ], [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'ModelErrorException', ], ], ], 'InvokeModelWithResponseStream' => [ 'name' => 'InvokeModelWithResponseStream', 'http' => [ 'method' => 'POST', 'requestUri' => '/model/{modelId}/invoke-with-response-stream', 'responseCode' => 200, ], 'input' => [ 'shape' => 'InvokeModelWithResponseStreamRequest', ], 'output' => [ 'shape' => 'InvokeModelWithResponseStreamResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ModelTimeoutException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ModelStreamErrorException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ModelNotReadyException', ], [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'ModelErrorException', ], ], ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'NonBlankString', ], ], 'error' => [ 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], 'AnyToolChoice' => [ 'type' => 'structure', 'members' => [], ], 'AutoToolChoice' => [ 'type' => 'structure', 'members' => [], ], 'Body' => [ 'type' => 'blob', 'max' => 25000000, 'min' => 0, 'sensitive' => true, ], 'ContentBlock' => [ 'type' => 'structure', 'members' => [ 'text' => [ 'shape' => 'String', ], 'image' => [ 'shape' => 'ImageBlock', ], 'toolUse' => [ 'shape' => 'ToolUseBlock', ], 'toolResult' => [ 'shape' => 'ToolResultBlock', ], ], 'union' => true, ], 'ContentBlockDelta' => [ 'type' => 'structure', 'members' => [ 'text' => [ 'shape' => 'String', ], 'toolUse' => [ 'shape' => 'ToolUseBlockDelta', ], ], 'union' => true, ], 'ContentBlockDeltaEvent' => [ 'type' => 'structure', 'required' => [ 'delta', 'contentBlockIndex', ], 'members' => [ 'delta' => [ 'shape' => 'ContentBlockDelta', ], 'contentBlockIndex' => [ 'shape' => 'NonNegativeInteger', ], ], 'event' => true, ], 'ContentBlockStart' => [ 'type' => 'structure', 'members' => [ 'toolUse' => [ 'shape' => 'ToolUseBlockStart', ], ], 'union' => true, ], 'ContentBlockStartEvent' => [ 'type' => 'structure', 'required' => [ 'start', 'contentBlockIndex', ], 'members' => [ 'start' => [ 'shape' => 'ContentBlockStart', ], 'contentBlockIndex' => [ 'shape' => 'NonNegativeInteger', ], ], 'event' => true, ], 'ContentBlockStopEvent' => [ 'type' => 'structure', 'required' => [ 'contentBlockIndex', ], 'members' => [ 'contentBlockIndex' => [ 'shape' => 'NonNegativeInteger', ], ], 'event' => true, ], 'ContentBlocks' => [ 'type' => 'list', 'member' => [ 'shape' => 'ContentBlock', ], ], 'ConversationRole' => [ 'type' => 'string', 'enum' => [ 'user', 'assistant', ], ], 'ConversationalModelId' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => '(arn:aws(-[^:]+)?:bedrock:[a-z0-9-]{1,20}:(([0-9]{12}:custom-model/[a-z0-9-]{1,63}[.]{1}[a-z0-9-]{1,63}/[a-z0-9]{12})|(:foundation-model/[a-z0-9-]{1,63}[.]{1}[a-z0-9-]{1,63}([.:]?[a-z0-9-]{1,63}))|([0-9]{12}:provisioned-model/[a-z0-9]{12})))|([a-z0-9-]{1,63}[.]{1}[a-z0-9-]{1,63}([.:]?[a-z0-9-]{1,63}))|(([0-9a-zA-Z][_-]?)+)', ], 'ConverseMetrics' => [ 'type' => 'structure', 'required' => [ 'latencyMs', ], 'members' => [ 'latencyMs' => [ 'shape' => 'Long', ], ], ], 'ConverseOutput' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'Message', ], ], 'union' => true, ], 'ConverseRequest' => [ 'type' => 'structure', 'required' => [ 'modelId', 'messages', ], 'members' => [ 'modelId' => [ 'shape' => 'ConversationalModelId', 'location' => 'uri', 'locationName' => 'modelId', ], 'messages' => [ 'shape' => 'Messages', ], 'system' => [ 'shape' => 'SystemContentBlocks', ], 'inferenceConfig' => [ 'shape' => 'InferenceConfiguration', ], 'toolConfig' => [ 'shape' => 'ToolConfiguration', ], 'additionalModelRequestFields' => [ 'shape' => 'Document', ], 'additionalModelResponseFieldPaths' => [ 'shape' => 'ConverseRequestAdditionalModelResponseFieldPathsList', ], ], ], 'ConverseRequestAdditionalModelResponseFieldPathsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConverseRequestAdditionalModelResponseFieldPathsListMemberString', ], 'max' => 10, 'min' => 0, ], 'ConverseRequestAdditionalModelResponseFieldPathsListMemberString' => [ 'type' => 'string', 'max' => 256, 'min' => 1, ], 'ConverseResponse' => [ 'type' => 'structure', 'required' => [ 'output', 'stopReason', 'usage', 'metrics', ], 'members' => [ 'output' => [ 'shape' => 'ConverseOutput', ], 'stopReason' => [ 'shape' => 'StopReason', ], 'usage' => [ 'shape' => 'TokenUsage', ], 'metrics' => [ 'shape' => 'ConverseMetrics', ], 'additionalModelResponseFields' => [ 'shape' => 'Document', ], ], ], 'ConverseStreamMetadataEvent' => [ 'type' => 'structure', 'required' => [ 'usage', 'metrics', ], 'members' => [ 'usage' => [ 'shape' => 'TokenUsage', ], 'metrics' => [ 'shape' => 'ConverseStreamMetrics', ], ], 'event' => true, ], 'ConverseStreamMetrics' => [ 'type' => 'structure', 'required' => [ 'latencyMs', ], 'members' => [ 'latencyMs' => [ 'shape' => 'Long', ], ], ], 'ConverseStreamOutput' => [ 'type' => 'structure', 'members' => [ 'messageStart' => [ 'shape' => 'MessageStartEvent', ], 'contentBlockStart' => [ 'shape' => 'ContentBlockStartEvent', ], 'contentBlockDelta' => [ 'shape' => 'ContentBlockDeltaEvent', ], 'contentBlockStop' => [ 'shape' => 'ContentBlockStopEvent', ], 'messageStop' => [ 'shape' => 'MessageStopEvent', ], 'metadata' => [ 'shape' => 'ConverseStreamMetadataEvent', ], 'internalServerException' => [ 'shape' => 'InternalServerException', ], 'modelStreamErrorException' => [ 'shape' => 'ModelStreamErrorException', ], 'validationException' => [ 'shape' => 'ValidationException', ], 'throttlingException' => [ 'shape' => 'ThrottlingException', ], ], 'eventstream' => true, ], 'ConverseStreamRequest' => [ 'type' => 'structure', 'required' => [ 'modelId', 'messages', ], 'members' => [ 'modelId' => [ 'shape' => 'ConversationalModelId', 'location' => 'uri', 'locationName' => 'modelId', ], 'messages' => [ 'shape' => 'Messages', ], 'system' => [ 'shape' => 'SystemContentBlocks', ], 'inferenceConfig' => [ 'shape' => 'InferenceConfiguration', ], 'toolConfig' => [ 'shape' => 'ToolConfiguration', ], 'additionalModelRequestFields' => [ 'shape' => 'Document', ], 'additionalModelResponseFieldPaths' => [ 'shape' => 'ConverseStreamRequestAdditionalModelResponseFieldPathsList', ], ], ], 'ConverseStreamRequestAdditionalModelResponseFieldPathsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ConverseStreamRequestAdditionalModelResponseFieldPathsListMemberString', ], 'max' => 10, 'min' => 0, ], 'ConverseStreamRequestAdditionalModelResponseFieldPathsListMemberString' => [ 'type' => 'string', 'max' => 256, 'min' => 1, ], 'ConverseStreamResponse' => [ 'type' => 'structure', 'members' => [ 'stream' => [ 'shape' => 'ConverseStreamOutput', ], ], 'payload' => 'stream', ], 'Document' => [ 'type' => 'structure', 'members' => [], 'document' => true, ], 'GuardrailIdentifier' => [ 'type' => 'string', 'max' => 2048, 'min' => 0, 'pattern' => '(([a-z0-9]+)|(arn:aws(-[^:]+)?:bedrock:[a-z0-9-]{1,20}:[0-9]{12}:guardrail/[a-z0-9]+))', ], 'GuardrailVersion' => [ 'type' => 'string', 'pattern' => '(([1-9][0-9]{0,7})|(DRAFT))', ], 'ImageBlock' => [ 'type' => 'structure', 'required' => [ 'format', 'source', ], 'members' => [ 'format' => [ 'shape' => 'ImageFormat', ], 'source' => [ 'shape' => 'ImageSource', ], ], ], 'ImageFormat' => [ 'type' => 'string', 'enum' => [ 'png', 'jpeg', 'gif', 'webp', ], ], 'ImageSource' => [ 'type' => 'structure', 'members' => [ 'bytes' => [ 'shape' => 'ImageSourceBytesBlob', ], ], 'union' => true, ], 'ImageSourceBytesBlob' => [ 'type' => 'blob', 'min' => 1, ], 'InferenceConfiguration' => [ 'type' => 'structure', 'members' => [ 'maxTokens' => [ 'shape' => 'InferenceConfigurationMaxTokensInteger', ], 'temperature' => [ 'shape' => 'InferenceConfigurationTemperatureFloat', ], 'topP' => [ 'shape' => 'InferenceConfigurationTopPFloat', ], 'stopSequences' => [ 'shape' => 'InferenceConfigurationStopSequencesList', ], ], ], 'InferenceConfigurationMaxTokensInteger' => [ 'type' => 'integer', 'box' => true, 'min' => 1, ], 'InferenceConfigurationStopSequencesList' => [ 'type' => 'list', 'member' => [ 'shape' => 'NonEmptyString', ], 'max' => 4, 'min' => 0, ], 'InferenceConfigurationTemperatureFloat' => [ 'type' => 'float', 'box' => true, 'max' => 1, 'min' => 0, ], 'InferenceConfigurationTopPFloat' => [ 'type' => 'float', 'box' => true, 'max' => 1, 'min' => 0, ], 'InternalServerException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'NonBlankString', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], 'InvokeModelIdentifier' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => '(arn:aws(-[^:]+)?:bedrock:[a-z0-9-]{1,20}:(([0-9]{12}:custom-model/[a-z0-9-]{1,63}[.]{1}[a-z0-9-]{1,63}/[a-z0-9]{12})|(:foundation-model/[a-z0-9-]{1,63}[.]{1}[a-z0-9-]{1,63}([.:]?[a-z0-9-]{1,63}))|([0-9]{12}:provisioned-model/[a-z0-9]{12})))|([a-z0-9-]{1,63}[.]{1}[a-z0-9-]{1,63}([.:]?[a-z0-9-]{1,63}))|(([0-9a-zA-Z][_-]?)+)', ], 'InvokeModelRequest' => [ 'type' => 'structure', 'required' => [ 'body', 'modelId', ], 'members' => [ 'body' => [ 'shape' => 'Body', ], 'contentType' => [ 'shape' => 'MimeType', 'location' => 'header', 'locationName' => 'Content-Type', ], 'accept' => [ 'shape' => 'MimeType', 'location' => 'header', 'locationName' => 'Accept', ], 'modelId' => [ 'shape' => 'InvokeModelIdentifier', 'location' => 'uri', 'locationName' => 'modelId', ], 'trace' => [ 'shape' => 'Trace', 'location' => 'header', 'locationName' => 'X-Amzn-Bedrock-Trace', ], 'guardrailIdentifier' => [ 'shape' => 'GuardrailIdentifier', 'location' => 'header', 'locationName' => 'X-Amzn-Bedrock-GuardrailIdentifier', ], 'guardrailVersion' => [ 'shape' => 'GuardrailVersion', 'location' => 'header', 'locationName' => 'X-Amzn-Bedrock-GuardrailVersion', ], ], 'payload' => 'body', ], 'InvokeModelResponse' => [ 'type' => 'structure', 'required' => [ 'body', 'contentType', ], 'members' => [ 'body' => [ 'shape' => 'Body', ], 'contentType' => [ 'shape' => 'MimeType', 'location' => 'header', 'locationName' => 'Content-Type', ], ], 'payload' => 'body', ], 'InvokeModelWithResponseStreamRequest' => [ 'type' => 'structure', 'required' => [ 'body', 'modelId', ], 'members' => [ 'body' => [ 'shape' => 'Body', ], 'contentType' => [ 'shape' => 'MimeType', 'location' => 'header', 'locationName' => 'Content-Type', ], 'accept' => [ 'shape' => 'MimeType', 'location' => 'header', 'locationName' => 'X-Amzn-Bedrock-Accept', ], 'modelId' => [ 'shape' => 'InvokeModelIdentifier', 'location' => 'uri', 'locationName' => 'modelId', ], 'trace' => [ 'shape' => 'Trace', 'location' => 'header', 'locationName' => 'X-Amzn-Bedrock-Trace', ], 'guardrailIdentifier' => [ 'shape' => 'GuardrailIdentifier', 'location' => 'header', 'locationName' => 'X-Amzn-Bedrock-GuardrailIdentifier', ], 'guardrailVersion' => [ 'shape' => 'GuardrailVersion', 'location' => 'header', 'locationName' => 'X-Amzn-Bedrock-GuardrailVersion', ], ], 'payload' => 'body', ], 'InvokeModelWithResponseStreamResponse' => [ 'type' => 'structure', 'required' => [ 'body', 'contentType', ], 'members' => [ 'body' => [ 'shape' => 'ResponseStream', ], 'contentType' => [ 'shape' => 'MimeType', 'location' => 'header', 'locationName' => 'X-Amzn-Bedrock-Content-Type', ], ], 'payload' => 'body', ], 'Long' => [ 'type' => 'long', 'box' => true, ], 'Message' => [ 'type' => 'structure', 'required' => [ 'role', 'content', ], 'members' => [ 'role' => [ 'shape' => 'ConversationRole', ], 'content' => [ 'shape' => 'ContentBlocks', ], ], ], 'MessageStartEvent' => [ 'type' => 'structure', 'required' => [ 'role', ], 'members' => [ 'role' => [ 'shape' => 'ConversationRole', ], ], 'event' => true, ], 'MessageStopEvent' => [ 'type' => 'structure', 'required' => [ 'stopReason', ], 'members' => [ 'stopReason' => [ 'shape' => 'StopReason', ], 'additionalModelResponseFields' => [ 'shape' => 'Document', ], ], 'event' => true, ], 'Messages' => [ 'type' => 'list', 'member' => [ 'shape' => 'Message', ], ], 'MimeType' => [ 'type' => 'string', ], 'ModelErrorException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'NonBlankString', ], 'originalStatusCode' => [ 'shape' => 'StatusCode', ], 'resourceName' => [ 'shape' => 'NonBlankString', ], ], 'error' => [ 'httpStatusCode' => 424, 'senderFault' => true, ], 'exception' => true, ], 'ModelNotReadyException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'NonBlankString', ], ], 'error' => [ 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, ], 'ModelStreamErrorException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'NonBlankString', ], 'originalStatusCode' => [ 'shape' => 'StatusCode', ], 'originalMessage' => [ 'shape' => 'NonBlankString', ], ], 'error' => [ 'httpStatusCode' => 424, 'senderFault' => true, ], 'exception' => true, ], 'ModelTimeoutException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'NonBlankString', ], ], 'error' => [ 'httpStatusCode' => 408, 'senderFault' => true, ], 'exception' => true, ], 'NonBlankString' => [ 'type' => 'string', 'pattern' => '[\\s\\S]*', ], 'NonEmptyString' => [ 'type' => 'string', 'min' => 1, ], 'NonNegativeInteger' => [ 'type' => 'integer', 'box' => true, 'min' => 0, ], 'PartBody' => [ 'type' => 'blob', 'max' => 1000000, 'min' => 0, 'sensitive' => true, ], 'PayloadPart' => [ 'type' => 'structure', 'members' => [ 'bytes' => [ 'shape' => 'PartBody', ], ], 'event' => true, 'sensitive' => true, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'NonBlankString', ], ], 'error' => [ 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'ResponseStream' => [ 'type' => 'structure', 'members' => [ 'chunk' => [ 'shape' => 'PayloadPart', ], 'internalServerException' => [ 'shape' => 'InternalServerException', ], 'modelStreamErrorException' => [ 'shape' => 'ModelStreamErrorException', ], 'validationException' => [ 'shape' => 'ValidationException', ], 'throttlingException' => [ 'shape' => 'ThrottlingException', ], 'modelTimeoutException' => [ 'shape' => 'ModelTimeoutException', ], ], 'eventstream' => true, ], 'ServiceQuotaExceededException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'NonBlankString', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'SpecificToolChoice' => [ 'type' => 'structure', 'required' => [ 'name', ], 'members' => [ 'name' => [ 'shape' => 'ToolName', ], ], ], 'StatusCode' => [ 'type' => 'integer', 'box' => true, 'max' => 599, 'min' => 100, ], 'StopReason' => [ 'type' => 'string', 'enum' => [ 'end_turn', 'tool_use', 'max_tokens', 'stop_sequence', 'content_filtered', ], ], 'String' => [ 'type' => 'string', ], 'SystemContentBlock' => [ 'type' => 'structure', 'members' => [ 'text' => [ 'shape' => 'NonEmptyString', ], ], 'union' => true, ], 'SystemContentBlocks' => [ 'type' => 'list', 'member' => [ 'shape' => 'SystemContentBlock', ], ], 'ThrottlingException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'NonBlankString', ], ], 'error' => [ 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, ], 'TokenUsage' => [ 'type' => 'structure', 'required' => [ 'inputTokens', 'outputTokens', 'totalTokens', ], 'members' => [ 'inputTokens' => [ 'shape' => 'TokenUsageInputTokensInteger', ], 'outputTokens' => [ 'shape' => 'TokenUsageOutputTokensInteger', ], 'totalTokens' => [ 'shape' => 'TokenUsageTotalTokensInteger', ], ], ], 'TokenUsageInputTokensInteger' => [ 'type' => 'integer', 'box' => true, 'min' => 0, ], 'TokenUsageOutputTokensInteger' => [ 'type' => 'integer', 'box' => true, 'min' => 0, ], 'TokenUsageTotalTokensInteger' => [ 'type' => 'integer', 'box' => true, 'min' => 0, ], 'Tool' => [ 'type' => 'structure', 'members' => [ 'toolSpec' => [ 'shape' => 'ToolSpecification', ], ], 'union' => true, ], 'ToolChoice' => [ 'type' => 'structure', 'members' => [ 'auto' => [ 'shape' => 'AutoToolChoice', ], 'any' => [ 'shape' => 'AnyToolChoice', ], 'tool' => [ 'shape' => 'SpecificToolChoice', ], ], 'union' => true, ], 'ToolConfiguration' => [ 'type' => 'structure', 'required' => [ 'tools', ], 'members' => [ 'tools' => [ 'shape' => 'ToolConfigurationToolsList', ], 'toolChoice' => [ 'shape' => 'ToolChoice', ], ], ], 'ToolConfigurationToolsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tool', ], 'min' => 1, ], 'ToolInputSchema' => [ 'type' => 'structure', 'members' => [ 'json' => [ 'shape' => 'Document', ], ], 'union' => true, ], 'ToolName' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '[a-zA-Z][a-zA-Z0-9_]*', ], 'ToolResultBlock' => [ 'type' => 'structure', 'required' => [ 'toolUseId', 'content', ], 'members' => [ 'toolUseId' => [ 'shape' => 'ToolUseId', ], 'content' => [ 'shape' => 'ToolResultContentBlocks', ], 'status' => [ 'shape' => 'ToolResultStatus', ], ], ], 'ToolResultContentBlock' => [ 'type' => 'structure', 'members' => [ 'json' => [ 'shape' => 'Document', ], 'text' => [ 'shape' => 'String', ], 'image' => [ 'shape' => 'ImageBlock', ], ], 'union' => true, ], 'ToolResultContentBlocks' => [ 'type' => 'list', 'member' => [ 'shape' => 'ToolResultContentBlock', ], ], 'ToolResultStatus' => [ 'type' => 'string', 'enum' => [ 'success', 'error', ], ], 'ToolSpecification' => [ 'type' => 'structure', 'required' => [ 'name', 'inputSchema', ], 'members' => [ 'name' => [ 'shape' => 'ToolName', ], 'description' => [ 'shape' => 'NonEmptyString', ], 'inputSchema' => [ 'shape' => 'ToolInputSchema', ], ], ], 'ToolUseBlock' => [ 'type' => 'structure', 'required' => [ 'toolUseId', 'name', 'input', ], 'members' => [ 'toolUseId' => [ 'shape' => 'ToolUseId', ], 'name' => [ 'shape' => 'ToolName', ], 'input' => [ 'shape' => 'Document', ], ], ], 'ToolUseBlockDelta' => [ 'type' => 'structure', 'required' => [ 'input', ], 'members' => [ 'input' => [ 'shape' => 'String', ], ], ], 'ToolUseBlockStart' => [ 'type' => 'structure', 'required' => [ 'toolUseId', 'name', ], 'members' => [ 'toolUseId' => [ 'shape' => 'ToolUseId', ], 'name' => [ 'shape' => 'ToolName', ], ], ], 'ToolUseId' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '[a-zA-Z0-9_-]+', ], 'Trace' => [ 'type' => 'string', 'enum' => [ 'ENABLED', 'DISABLED', ], ], 'ValidationException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'NonBlankString', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], ],];

<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Audio stream configuration parameter
 *
 * @method string getCodec() Obtain Audio stream encoding format.
When audio transcoding is not needed, the value is:
<li>copy.</li>
When the outer parameter Container is mp3, the value is:
<li>mp3.</li>
When the outer parameter Container is ogg or flac, the value is:
<li>flac.</li>
When the outer parameter Container is m4a, valid values are:
<li>aac;</li>
<li>ac3.</li>
When the outer parameter Container is mp4 or flv, valid values are:
<li>aac: more suitable for mp4;</li>
<li>mp3: more suitable for flv;</li>
<li>mp2.</li>
When the outer parameter Container is hls, valid values are:
<li>aac;</li>
<li>mp3.</li>
 * @method void setCodec(string $Codec) Set Audio stream encoding format.
When audio transcoding is not needed, the value is:
<li>copy.</li>
When the outer parameter Container is mp3, the value is:
<li>mp3.</li>
When the outer parameter Container is ogg or flac, the value is:
<li>flac.</li>
When the outer parameter Container is m4a, valid values are:
<li>aac;</li>
<li>ac3.</li>
When the outer parameter Container is mp4 or flv, valid values are:
<li>aac: more suitable for mp4;</li>
<li>mp3: more suitable for flv;</li>
<li>mp2.</li>
When the outer parameter Container is hls, valid values are:
<li>aac;</li>
<li>mp3.</li>
 * @method integer getBitrate() Obtain Audio stream bitrate in Kbps. Value range: 0 and [26, 256].
If the value is 0, the bitrate of the audio stream will be the same as that of the original audio.
 * @method void setBitrate(integer $Bitrate) Set Audio stream bitrate in Kbps. Value range: 0 and [26, 256].
If the value is 0, the bitrate of the audio stream will be the same as that of the original audio.
 * @method integer getSampleRate() Obtain Audio stream sample rate. Valid values:
<li>32,000</li>
<li>44,100</li>
<li>48,000</li>
In Hz.
 * @method void setSampleRate(integer $SampleRate) Set Audio stream sample rate. Valid values:
<li>32,000</li>
<li>44,100</li>
<li>48,000</li>
In Hz.
 * @method integer getAudioChannel() Obtain Audio channel mode. Valid values:
<li>1: single channel.</li>
<li>2: dual channel.</li>
<li>6: 5.1 surround sound.</li>
When the media encapsulation format is audio (flac, ogg, mp3, and m4a), the number of channels cannot be set to 5.1 surround sound.
Default value: 2.
 * @method void setAudioChannel(integer $AudioChannel) Set Audio channel mode. Valid values:
<li>1: single channel.</li>
<li>2: dual channel.</li>
<li>6: 5.1 surround sound.</li>
When the media encapsulation format is audio (flac, ogg, mp3, and m4a), the number of channels cannot be set to 5.1 surround sound.
Default value: 2.
 * @method AudioTrackChannelInfo getTrackChannelInfo() Obtain Merge audio track information.
This field only takes effec in adaptive bitrate transcoding.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTrackChannelInfo(AudioTrackChannelInfo $TrackChannelInfo) Set Merge audio track information.
This field only takes effec in adaptive bitrate transcoding.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class AudioTemplateInfo extends AbstractModel
{
    /**
     * @var string Audio stream encoding format.
When audio transcoding is not needed, the value is:
<li>copy.</li>
When the outer parameter Container is mp3, the value is:
<li>mp3.</li>
When the outer parameter Container is ogg or flac, the value is:
<li>flac.</li>
When the outer parameter Container is m4a, valid values are:
<li>aac;</li>
<li>ac3.</li>
When the outer parameter Container is mp4 or flv, valid values are:
<li>aac: more suitable for mp4;</li>
<li>mp3: more suitable for flv;</li>
<li>mp2.</li>
When the outer parameter Container is hls, valid values are:
<li>aac;</li>
<li>mp3.</li>
     */
    public $Codec;

    /**
     * @var integer Audio stream bitrate in Kbps. Value range: 0 and [26, 256].
If the value is 0, the bitrate of the audio stream will be the same as that of the original audio.
     */
    public $Bitrate;

    /**
     * @var integer Audio stream sample rate. Valid values:
<li>32,000</li>
<li>44,100</li>
<li>48,000</li>
In Hz.
     */
    public $SampleRate;

    /**
     * @var integer Audio channel mode. Valid values:
<li>1: single channel.</li>
<li>2: dual channel.</li>
<li>6: 5.1 surround sound.</li>
When the media encapsulation format is audio (flac, ogg, mp3, and m4a), the number of channels cannot be set to 5.1 surround sound.
Default value: 2.
     */
    public $AudioChannel;

    /**
     * @var AudioTrackChannelInfo Merge audio track information.
This field only takes effec in adaptive bitrate transcoding.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TrackChannelInfo;

    /**
     * @param string $Codec Audio stream encoding format.
When audio transcoding is not needed, the value is:
<li>copy.</li>
When the outer parameter Container is mp3, the value is:
<li>mp3.</li>
When the outer parameter Container is ogg or flac, the value is:
<li>flac.</li>
When the outer parameter Container is m4a, valid values are:
<li>aac;</li>
<li>ac3.</li>
When the outer parameter Container is mp4 or flv, valid values are:
<li>aac: more suitable for mp4;</li>
<li>mp3: more suitable for flv;</li>
<li>mp2.</li>
When the outer parameter Container is hls, valid values are:
<li>aac;</li>
<li>mp3.</li>
     * @param integer $Bitrate Audio stream bitrate in Kbps. Value range: 0 and [26, 256].
If the value is 0, the bitrate of the audio stream will be the same as that of the original audio.
     * @param integer $SampleRate Audio stream sample rate. Valid values:
<li>32,000</li>
<li>44,100</li>
<li>48,000</li>
In Hz.
     * @param integer $AudioChannel Audio channel mode. Valid values:
<li>1: single channel.</li>
<li>2: dual channel.</li>
<li>6: 5.1 surround sound.</li>
When the media encapsulation format is audio (flac, ogg, mp3, and m4a), the number of channels cannot be set to 5.1 surround sound.
Default value: 2.
     * @param AudioTrackChannelInfo $TrackChannelInfo Merge audio track information.
This field only takes effec in adaptive bitrate transcoding.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Codec",$param) and $param["Codec"] !== null) {
            $this->Codec = $param["Codec"];
        }

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("AudioChannel",$param) and $param["AudioChannel"] !== null) {
            $this->AudioChannel = $param["AudioChannel"];
        }

        if (array_key_exists("TrackChannelInfo",$param) and $param["TrackChannelInfo"] !== null) {
            $this->TrackChannelInfo = new AudioTrackChannelInfo();
            $this->TrackChannelInfo->deserialize($param["TrackChannelInfo"]);
        }
    }
}
